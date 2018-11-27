<?php

namespace App\MsSQL;

class Clube extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'mssql';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Tab_Clubes';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['NOME','NOME_OLD','PADRINHO','DATA_FUNDACAO','DATA_RECONHECIMENTO','DATA_FECHAMENTO','NOME_MASCOTE','ID_DISTRITO','TIPO_CLUBE','TIPO_ORG','HOSPEDAGEM_FAMILIAR','PARCERIA','CNPJ','EMAIL','TELEFONE','CELULAR','FACEBOOK','TWITTER','ORKUT','LINKEDIN','SKYPE','MSN','SITE','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO'];

    /**
     * Distrito belongs to Distrito.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distrito()
    {
        // belongsTo(RelatedModel, foreignKey = distrito_id, keyOnRelatedModel = id)
        return $this->belongsTo(Distrito::class, 'ID_DISTRITO', 'DISTRITO');
    }

    /**
     * Socio has many Clube_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clube_socio()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Clube_Socio::class,'ID_CLUBE');
    }

    /**
     * Socio has many Clube_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargo_socio()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Cargo_Socio::class,'ID_CLUBE');
    }

    /**
     * Clube has many Enderecos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enderecos()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = clube_id, localKey = id)
        return $this->hasMany(Clube_Endereco::class,'ID_CLUBE');
    }

    /**
     * Clube has many Historico.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function historico()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = clube_id, localKey = id)
        return $this->hasMany(Clube_Historico::class,'ID_CLUBE');
    }

    /**
     * Clube belongs to Tipo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo()
    {
        // belongsTo(RelatedModel, foreignKey = tipo_id, keyOnRelatedModel = id)
        return $this->belongsTo(Tipo_Clube::class,'TIPO_CLUBE');
    }
}