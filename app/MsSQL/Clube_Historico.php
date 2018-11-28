<?php

namespace App\MsSQL;

class Clube_Historico extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Tab_Clubes_Historico';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['ID_CLUBE','DATA_ABERTURA','DATA_RECONHECIMENTO','DATA_FECHAMENTO','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO'];

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
}