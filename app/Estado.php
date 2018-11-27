<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['estado','uf'];

    /**
     * Estado has many Cidades.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cidades()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = estado_id, localKey = id)
    	return $this->hasMany(Cidade::class);
    }

    /**
     * Estado belongs to Distritos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distritos()
    {
        // belongsTo(RelatedModel, foreignKey = distritos_id, keyOnRelatedModel = id)
        return $this->belongsToMany(Distrito::class);
    }
}
