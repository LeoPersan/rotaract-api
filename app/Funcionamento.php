<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionamento extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['clube_id','inicio','fim'];

    /**
     * Funcionamento belongs to Clube.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clube()
    {
    	// belongsTo(RelatedModel, foreignKey = clube_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Clube::class);
    }
}
