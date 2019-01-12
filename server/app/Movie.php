<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'short_description', 'description', 'release_date', 'duration', 'additional_information', 'type', 'genre', 'crew', 'imdb_rating'];

    protected $casts = [
        'name' => 'array',
        'release_date' => 'date',
        'additional_information' => 'array',
        'imdb_rating' => 'float',
    ];

}
