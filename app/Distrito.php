<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['regiao_id','distrito'];

    public function setDistritoAttribute($value)
    {
    	$this->attributes['id'] = (int) $value;
    	$this->attributes['distrito'] = (int) $value;
    }

    /**
     * Distrito belongs to Estado.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estados()
    {
        // belongsTo(RelatedModel, foreignKey = estado_id, keyOnRelatedModel = id)
        return $this->belongsToMany(Estado::class);
    }

    /**
     * Distrito has many Cidades.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cidades()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = distrito_id, localKey = id)
        return $this->hasMany(Cidade::class);
    }

    /**
     * Distrito has many Clubes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clubes()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = distrito_id, localKey = id)
        return $this->hasMany(Clube::class);
    }

    /**
     * Distrito morphs many Email.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function emails()
    {
        // morphMany(MorphedModel, morphableName, type = able_type, relatedKeyName = able_id, localKey = id)
        return $this->morphMany(Email::class, 'dono');
    }

    /**
     * Distrito morphs many Telefone.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function telefones()
    {
        // morphMany(MorphedModel, morphableName, type = able_type, relatedKeyName = able_id, localKey = id)
        return $this->morphMany(Telefone::class, 'dono');
    }

    public function withRelationships()
    {
        $this->attributes['emails'] = $this->emails;
        $this->attributes['telefones'] = $this->telefones;
        $this->attributes['estados'] = $this->estados;
        $this->attributes['clubes'] = $this->clubes;
        return $this;
    }
}
