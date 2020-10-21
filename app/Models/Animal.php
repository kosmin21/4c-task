<?php

namespace App\Models;

use App\Models\Interfaces\AnimalModelInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string name
 * @property string temperament
 * @property string alternative_names
 * @property string life_span
 * @property string origin
 * @property string wikipedia_url
 * @property string country_code
 * @property string description
 * @property string favourite
 */
abstract class Animal extends Model implements AnimalModelInterface
{
    use HasFactory;

    protected $fillable = [
        'name',
        'temperament',
        'alternative_names',
        'life_span',
        'origin',
        'wikipedia_url',
        'country_code',
        'description',
        'favourite'
    ];

    protected $appends = [
        'animal_type'
    ];

}
