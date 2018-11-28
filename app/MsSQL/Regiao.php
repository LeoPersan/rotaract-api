<?php

namespace App\MsSQL;

class Regiao extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Tab_Regioes';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['REGIAO'];

    /**
     * Regiao belongs to Distritos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function distritos()
    {
        // belongsTo(RelatedModel, foreignKey = distritos_id, keyOnRelatedModel = id)
        return $this->belongsToMany(Distrito::class,'Tab_Regiao_Distrito','ID_REGIAO','ID_DISTRITO');
    }
}