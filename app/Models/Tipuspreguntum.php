<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tipuspreguntum
 *
 * @property $id
 * @property $descripcio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tipuspreguntum extends Model
{
    
    static $rules = [
		'descripcio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcio'];



}
