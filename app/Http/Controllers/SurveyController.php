<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\SurveyInputs;
use Illuminate\Http\Request;
use App\Models\SurveyInputSelect;

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
}
