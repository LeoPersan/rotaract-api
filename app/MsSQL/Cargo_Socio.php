<?php

namespace App\MsSQL;

class Cargo_Socio extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Tab_Cargos_Socios';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['ID_SOCIO','TIPO_CARGO','ID_CLUBE','ID_CLUBESOCIO','ID_DISTRITO','ID_CARGO','ANO_ROTARIO','GESTAO_COMPLETA','DATA_INICIO','DATA_FIM','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO'];

    /**
     * Cargo_Socio belongs to Socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function socio()
    {
        // belongsTo(RelatedModel, foreignKey = socio_id, keyOnRelatedModel = id)
        return $this->belongsTo(Socio::class,'ID_SOCIO');
    }

    /**
     * Cargo_Socio belongs to Cargo.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cargo()
    {
        // belongsTo(RelatedModel, foreignKey = cargo_id, keyOnRelatedModel = id)
        return $this->belongsTo(Cargo::class,'ID_CARGO');
    }

    /**
     * Cargo_Socio belongs to Clube.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clube()
    {
        // belongsTo(RelatedModel, foreignKey = clube_id, keyOnRelatedModel = id)
        return $this->belongsTo(Clube::class,'ID_CLUBE');
    }

    /**
     * Cargo_Socio belongs to Clube_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clube_socio()
    {
        // belongsTo(RelatedModel, foreignKey = clube_socio_id, keyOnRelatedModel = id)
        return $this->belongsTo(Clube_Socio::class,'ID_CLUBESOCIO');
    }

    /**
     * Cargo_Socio belongs to Distrito.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distrito()
    {
        // belongsTo(RelatedModel, foreignKey = distrito_id, keyOnRelatedModel = id)
        return $this->belongsTo(Distrito::class,'ID_DISTRITO');
    }


}