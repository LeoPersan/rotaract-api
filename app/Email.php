<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['dono_id','dono_type','email'];

    /**
     * Telefone morphs to models in dono_type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function dono()
    {
    	// morphTo($name = dono, $type = dono_type, $id = dono_id)
    	// requires dono_type and dono_id fields on $this->table
    	return $this->morphTo();
    }
}
