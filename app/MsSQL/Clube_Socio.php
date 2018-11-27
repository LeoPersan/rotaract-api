<?php

namespace App\MsSQL;

class Clube_Socio extends Model
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
    protected $table = 'Tab_Clubes_Socios';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['ID_SOCIO','ID_CLUBE','DATA_POSSE','DATA_DESLIGAMENTO','ID_PADRINHO','FUNDADOR','HONORARIO','ID_USUARIO_POSSE','ID_USUARIO_DESLIGAMENTO','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO'];

    /**
     * Clube_Socio belongs to Socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function socio()
    {
        // belongsTo(RelatedModel, foreignKey = socio_id, keyOnRelatedModel = id)
        return $this->belongsTo(Socio::class, 'ID_SOCIO');
    }

    /**
     * Clube_Socio belongs to Clube.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clube()
    {
        // belongsTo(RelatedModel, foreignKey = clube_id, keyOnRelatedModel = id)
        return $this->belongsTo(Clube::class,'ID_CLUBE');
    }

    /**
     * Clube_Socio belongs to Padrinho.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function padrinho()
    {
        // belongsTo(RelatedModel, foreignKey = padrinho_id, keyOnRelatedModel = id)
        return $this->belongsTo(Socio::class,'ID_PADRINHO');
    }

    /**
     * Socio has many Clube_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargo_socio()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Cargo_Socio::class,'ID_CLUBESOCIO');
    }
}