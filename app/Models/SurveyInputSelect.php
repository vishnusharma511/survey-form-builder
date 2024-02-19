<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyInputSelect extends Model
{
    use HasFactory;

    protected $table = 'survey_input_selects';

    protected $fillable = [
        'survey_input_id',
        'key',
        'value',
        'status',
        'sort',
    ];
}
