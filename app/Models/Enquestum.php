<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Enquestum
 *
 * @property $id
 * @property $descripcio
 * @property $localitat
 * @property $created_at
 * @property $updated_at
 *
 * @property Preguntum[] $preguntas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Enquestum extends Model
{
    
    static $rules = [
		'descripcio' => 'required',
		'localitat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['descripcio','localitat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function preguntas()
    {
        return $this->hasMany('App\Models\Preguntum', 'enquesta_id', 'id');
    }
    

}
