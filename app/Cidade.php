<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['estado_id','distrito_id','cidade'];

    public function setCidadeAttribute($value)
    {
    	$this->attributes['cidade'] = $value;
    	$this->attributes['slug'] = str_slug($value);
    }
}
