<?php

namespace App\MsSQL;

class Socio extends Model
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
    protected $table = 'Tab_Socios';

    protected $primaryKey = 'ID';

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['NOME','APELIDO','SEXO','RG','RG_EMISSOR','RG_EMISSOR_DATA','CPF','DATA_NASCIMENTO','SENHAXXX','SENHA','ADMIN','ADM_NOTICIA','ADM_BANNER','ADM_MURAL','ADM_PROJETOS','ADM_DOWNLOADS','PROFISSAO','EMAIL','TELEFONE_01','TELEFONE_02','TELEFONE_03','CELULAR_01','CELULAR_02','CELULAR_03','FACEBOOK','TWITTER','ORKUT','LINKEDIN','SKYPE','MSN','SITE','OBS','EXCLUIDO','EXCLUIDO_DATA','EXCLUIDO_ID_USUARIO','CADASTRO_DATA','CADASTRO_ID_USUARIO','ROTAKIDS','INTERACT','RYLA','INTERCAMBISTA'];

    /**
     * Socio has many Clube_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function clube_socio()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Clube_Socio::class,'ID_SOCIO');
    }

    /**
     * Socio has many Clube_socio.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function afilhados()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Clube_Socio::class,'ID_PADRINHO');
    }

    /**
     * Socio has many Enderecos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function enderecos()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Socio_Endereco::class,'ID_SOCIO');
    }

    /**
     * Socio has many Cargos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cargo_socio()
    {
        // hasMany(RelatedModel, foreignKeyOnRelatedModel = socio_id, localKey = id)
        return $this->hasMany(Cargo_Socio::class,'ID_SOCIO');
    }
}