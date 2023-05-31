<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Opciopreguntum
 *
 * @property $id
 * @property $numero
 * @property $descripcio
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Opciopreguntum extends Model
{
    
    static $rules = [
		'numero' => 'required',
		'descripcio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero','descripcio'];

    
    

}
