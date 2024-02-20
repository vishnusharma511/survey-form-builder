<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    use HasFactory;

    protected $table = 'form_data';

    protected $fillable = [
        'survey_id',
        'name',
        'phone',
        'email',
        'company',
        'services'
    ];

    const services = [
        'brand strategy development' => 'Brand Strategy Development',
        'brand identity design' => 'Brand Identity Design',
        'creative advertising campaigns' => 'Creative Advertising Campaigns',
        'digital marketing' => 'Digital Marketing',
        'content creation' => 'Content Creation',
        'website design and development' => 'Website Design and Development',
        'public relations' => 'Public Relations'
    ];


    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
