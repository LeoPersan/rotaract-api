<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['cidade_id','distrito_id','clube','padrinho','mascote','fundacao','reconhecimento','fechamento','couchsurfing','facebook','twitter','orkut','linkedin','msn','site'];

    public function setClubeAttribute($value)
    {
        $this->attributes['clube'] = 'Rotaract Club '.$value;
        $this->attributes['slug'] = str_slug(preg_replace('/^de /', '', $value));
    }

    /**
     * Clube belongs to Cidade.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cidade()
    {
    	// belongsTo(RelatedModel, foreignKey = cidade_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Cidade::class);
    }

    /**
     * Clube belongs to Distrito.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distrito()
    {
    	// belongsTo(RelatedModel, foreignKey = distrito_id, keyOnRelatedModel = id)
    	return $this->belongsTo(Distrito::class);
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

    /**
     * Clube has many Funcionamentos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function funcionamentos()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = clube_id, localKey = id)
        return $this->hasMany(Funcionamento::class);
    }
}
