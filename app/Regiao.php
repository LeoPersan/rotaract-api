<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regiao extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'regioes';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['regiao'];

    /**
     * Regiao has many Distritos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function distritos()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = regiao_id, localKey = id)
        return $this->hasMany(Distrito::class);
    }
}
