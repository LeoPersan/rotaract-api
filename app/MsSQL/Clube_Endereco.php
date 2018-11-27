<?php

namespace App\MsSQL;

class Clube_Endereco extends Model
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
    protected $table = 'Tab_Clubes_Enderecos';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['ID_CLUBE','ID_TIPO','ENDERECO','ENDERECO_NUM','ENDERECO_COMPL','ENDERECO_BAIRRO','ENDERECO_CEP','ENDERECO_CIDADE','ENDERECO_ESTADO','PADRAO','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO','HORA_REUNIAO1','HORA_REUNIAO'];

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
     * Clube_Socio belongs to Socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo()
    {
        // belongsTo(RelatedModel, foreignKey = socio_id, keyOnRelatedModel = id)
        return $this->belongsTo(Tipo_Endereco::class, 'ID_TIPO');
    }
}