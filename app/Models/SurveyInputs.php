<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveyInputs extends Model
{
    use HasFactory;

    protected $table  = 'survey_inputs';

    protected $fillable = [
        'survey_id',
        'name',
        'key',
        'type',
        'is_required',
        'pattern',
        'status',
        'sort',
    ];
}
