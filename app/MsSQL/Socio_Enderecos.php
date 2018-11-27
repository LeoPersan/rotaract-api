<?php

namespace App\MsSQL;

class Socio_Endereco extends Model
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
    protected $table = 'Tab_Socios_Enderecos';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['ID_SOCIO','ID_TIPO','ENDERECO','ENDERECO_NUM','ENDERECO_COMPL','ENDERECO_BAIRRO','ENDERECO_CEP','ENDERECO_CIDADE','ENDERECO_ESTADO','PADRAO','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO'];

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