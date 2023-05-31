<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Preguntum
 *
 * @property $id
 * @property $enquesta_id
 * @property $numero
 * @property $enunciat
 * @property $created_at
 * @property $updated_at
 *
 * @property Enquestum $enquestum
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Preguntum extends Model
{
    
    static $rules = [
		'enquesta_id' => 'required',
		'numero' => 'required',
		'enunciat' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['enquesta_id','numero','enunciat'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function enquestum()
    {
        return $this->hasOne('App\Models\Enquestum', 'id', 'enquesta_id');
    }
    

}
