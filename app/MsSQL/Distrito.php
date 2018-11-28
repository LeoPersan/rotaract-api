<?php

namespace App\MsSQL;

class Distrito extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Tab_Distritos';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['DISTRITO','NOME_MASCOTE','URL_SITE','EMAIL','AREA','TIPO_CONTATO','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO'];

    /**
     * Distrito has many Clubes.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clubes()
    {
    	// hasMany(RelatedModel, foreignKeyOnRelatedModel = distrito_id, localKey = id)
    	return $this->hasMany(Clube::class, 'ID_DISTRITO', 'DISTRITO');
    }

    /**
     * Socio has many Clube_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargo_socio()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Cargo_Socio::class,'ID_DISTRITO');
    }

    /**
     * Regiao belongs to Distritos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estados()
    {
        // belongsTo(RelatedModel, foreignKey = distritos_id, keyOnRelatedModel = id)
        return $this->belongsToMany(Estado::class,'Tab_Distritos_Estados','DISTRITO','ESTADO');
    }

    /**
     * Regiao belongs to Distritos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function regiao()
    {
        // belongsTo(RelatedModel, foreignKey = distritos_id, keyOnRelatedModel = id)
        return $this->belongsToMany(Regiao::class,'Tab_Regiao_Distrito','ID_DISTRITO','ID_REGIAO');
    }
}