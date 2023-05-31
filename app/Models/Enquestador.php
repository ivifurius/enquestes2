<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enquestador
 *
 * @property $id
 * @property $nom
 * @property $localitat
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Enquestador extends Model
{
    
    static $rules = [
		'nom' => 'required',
		'localitat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','localitat'];



}
