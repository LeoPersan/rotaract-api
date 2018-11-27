<?php

namespace App\MsSQL;

class Estado extends Model
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
    protected $table = 'Tab_Estados';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['ESTADO'];

    /**
     * Regiao belongs to Distritos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distritos()
    {
        // belongsTo(RelatedModel, foreignKey = distritos_id, keyOnRelatedModel = id)
        return $this->belongsToMany(Distrito::class,'Tab_Distritos_Estados','ESTADO','DISTRITO');
    }
}