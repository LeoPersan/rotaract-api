<?php

namespace App\MsSQL;

class Tipo_Endereco extends Model
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
    protected $table = 'Tab_Tipo_Endereco';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['TIPO'];

    /**
     * Socio has many Enderecos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enderecos()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Socio_Endereco::class,'ID_TIPO');
    }
}