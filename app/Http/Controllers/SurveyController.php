<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\FormData;
use App\Models\SurveyInputs;
use Illuminate\Http\Request;
use App\Models\SurveyInputSelect;
use Illuminate\Http\RedirectResponse;

class SurveyController extends Controller
{
    public function show($url)
    {
        $survey = Survey::where('url', $url)->firstOrFail();

        $inputsAndSelect = SurveyInputs::where('survey_id', $survey->id)->orderBy('sort','ASC')->get();


        foreach ($inputsAndSelect as $input) {
            if ($input->key == 'select') {
                $input['selectOptions'] = SurveyInputSelect::where('survey_input_id', $input->id)->orderBy('sort','ASC')->get();
            }
        }

        $templatePath = $survey->template;

        if (view()->exists($templatePath)) {
            return view($templatePath, compact('survey','inputsAndSelect'));
        } else {
            abort(404);
        }
    }


    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'survey_id' => 'required',
            'name' => 'required|string',
            'phone' => 'required|string|min:10|max:10',
            'email' => 'required|email|unique:form_data,email',
            'company' => 'nullable|string',
            'services' => 'required|string',
        ]);

        $survey = new FormData();
        $survey->survey_id = $request->survey_id;
        $survey->name = $request->name;
        $survey->phone = $request->phone;
        $survey->email = $request->email;
        $survey->company = $request->company;
        $survey->services = $request->services;
        $survey->save();

        return redirect()->route('thankyou');
    }
}
