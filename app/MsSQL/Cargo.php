<?php

namespace App\MsSQL;

class Cargo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'Tab_Cargos';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['Cargo','CargoF','CargoEng','CargoEngF','CargoEsp','CargoEspF','CLUBE','DISTRITO','OMIR','PERMISSAO_CLUBE','PERMISSAO_DISTRITO','PERMISSAO_OMIR','ORDEM_EXIBICAO','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO','ATIVO'];

    /**
     * Cargo has many Cargo_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargo_socio()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = cargo_id, localKey = id)
        return $this->hasMany(Cargo_Socio::class,'ID_CARGO');
    }
}