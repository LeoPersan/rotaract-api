<?php

use Illuminate\Database\Seeder;
use App\Cidade;
use App\Clube;
use App\Distrito;
use App\Estado;
use App\Regiao;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $i = Regiao::create(['regiao'=>'I']);
        $ii = Regiao::create(['regiao'=>'II']);
        $iii = Regiao::create(['regiao'=>'III']);
        $iv = Regiao::create(['regiao'=>'IV']);
        $v = Regiao::create(['regiao'=>'V']);
        $vi = Regiao::create(['regiao'=>'VI']);
        $vii = Regiao::create(['regiao'=>'VII']);
        $viii = Regiao::create(['regiao'=>'VIII']);
        $ix = Regiao::create(['regiao'=>'IX']);
        $x = Regiao::create(['regiao'=>'X']);
        $xi = Regiao::create(['regiao'=>'XI']);

        $ap = Estado::create(['estado'=>'Amapá','uf'=>'AP']);
        $am = Estado::create(['estado'=>'Amazonas','uf'=>'AM']);
        $ac = Estado::create(['estado'=>'Acre','uf'=>'AC']);
        $ro = Estado::create(['estado'=>'Rondonia','uf'=>'RO']);
        $rr = Estado::create(['estado'=>'Roraima','uf'=>'RR']);
        $pa = Estado::create(['estado'=>'Pará','uf'=>'PA']);
        $to = Estado::create(['estado'=>'Tocantins','uf'=>'TO']);
        $ma = Estado::create(['estado'=>'Maranhão','uf'=>'MA']);
        $rn = Estado::create(['estado'=>'Rio Grande do Norte','uf'=>'RN']);
        $ce = Estado::create(['estado'=>'Ceará','uf'=>'CE']);
        $pe = Estado::create(['estado'=>'Pernambuco','uf'=>'PE']);
        $al = Estado::create(['estado'=>'Alagoas','uf'=>'AL']);
        $ba = Estado::create(['estado'=>'Bahia','uf'=>'BA']);
        $mg = Estado::create(['estado'=>'Minas Gerais','uf'=>'MG']);
        $es = Estado::create(['estado'=>'Espirito Santo','uf'=>'ES']);
        $rj = Estado::create(['estado'=>'Rio de Janeiro','uf'=>'RJ']);
        $sp = Estado::create(['estado'=>'São Paulo','uf'=>'SP']);
        $mt = Estado::create(['estado'=>'Mato Grosso','uf'=>'MT']);
        $ms = Estado::create(['estado'=>'Mato Grosso do Sul','uf'=>'MS']);
        $go = Estado::create(['estado'=>'Goias','uf'=>'GO']);
        $sc = Estado::create(['estado'=>'Santa Catarina','uf'=>'SC']);
        $pr = Estado::create(['estado'=>'Paraná','uf'=>'PR']);
        $rs = Estado::create(['estado'=>'Rio Grande do Sul','uf'=>'RS']);
        $df = Estado::create(['estado'=>'Distrito Federal','uf'=>'DF']);
        $pb = Estado::create(['estado'=>'Paraíba','uf'=>'PB']);
        $se = Estado::create(['estado'=>'Sergipe','uf'=>'SE']);
        $pi = Estado::create(['estado'=>'Piaui','uf'=>'PI']);

        $d4660 = Distrito::create(['distrito'=>'4660','regiao_id'=>$i->id]);
        $d4670 = Distrito::create(['distrito'=>'4670','regiao_id'=>$i->id]);
        $d4680 = Distrito::create(['distrito'=>'4680','regiao_id'=>$i->id]);
        $d4700 = Distrito::create(['distrito'=>'4700','regiao_id'=>$i->id]);
        $d4780 = Distrito::create(['distrito'=>'4780','regiao_id'=>$i->id]);
        $d4650 = Distrito::create(['distrito'=>'4650','regiao_id'=>$ii->id]);
        $d4651 = Distrito::create(['distrito'=>'4651','regiao_id'=>$ii->id]);
        $d4740 = Distrito::create(['distrito'=>'4740','regiao_id'=>$ii->id]);
        $d4510 = Distrito::create(['distrito'=>'4510','regiao_id'=>$iii->id]);
        $d4630 = Distrito::create(['distrito'=>'4630','regiao_id'=>$iii->id]);
        $d4640 = Distrito::create(['distrito'=>'4640','regiao_id'=>$iii->id]);
        $d4710 = Distrito::create(['distrito'=>'4710','regiao_id'=>$iii->id]);
        $d4730 = Distrito::create(['distrito'=>'4730','regiao_id'=>$iii->id]);
        $d4310 = Distrito::create(['distrito'=>'4310','regiao_id'=>$iv->id]);
        $d4480 = Distrito::create(['distrito'=>'4480','regiao_id'=>$iv->id]);
        $d4540 = Distrito::create(['distrito'=>'4540','regiao_id'=>$iv->id]);
        $d4590 = Distrito::create(['distrito'=>'4590','regiao_id'=>$iv->id]);
        $d4620 = Distrito::create(['distrito'=>'4620','regiao_id'=>$iv->id]);
        $d4410 = Distrito::create(['distrito'=>'4410','regiao_id'=>$v->id]);
        $d4420 = Distrito::create(['distrito'=>'4420','regiao_id'=>$v->id]);
        $d4430 = Distrito::create(['distrito'=>'4430','regiao_id'=>$v->id]);
        $d4570 = Distrito::create(['distrito'=>'4570','regiao_id'=>$v->id]);
        $d4600 = Distrito::create(['distrito'=>'4600','regiao_id'=>$v->id]);
        $d4610 = Distrito::create(['distrito'=>'4610','regiao_id'=>$v->id]);
        $d4750 = Distrito::create(['distrito'=>'4750','regiao_id'=>$v->id]);
        $d4520 = Distrito::create(['distrito'=>'4520','regiao_id'=>$vi->id]);
        $d4560 = Distrito::create(['distrito'=>'4560','regiao_id'=>$vi->id]);
        $d4580 = Distrito::create(['distrito'=>'4580','regiao_id'=>$vi->id]);
        $d4760 = Distrito::create(['distrito'=>'4760','regiao_id'=>$vi->id]);
        $d4470 = Distrito::create(['distrito'=>'4470','regiao_id'=>$vii->id]);
        $d4530 = Distrito::create(['distrito'=>'4530','regiao_id'=>$vii->id]);
        $d4770 = Distrito::create(['distrito'=>'4770','regiao_id'=>$vii->id]);
        $d4390 = Distrito::create(['distrito'=>'4390','regiao_id'=>$viii->id]);
        $d4550 = Distrito::create(['distrito'=>'4550','regiao_id'=>$viii->id]);
        $d4490 = Distrito::create(['distrito'=>'4490','regiao_id'=>$x->id]);
        $d4500 = Distrito::create(['distrito'=>'4500','regiao_id'=>$x->id]);
        $d4440 = Distrito::create(['distrito'=>'4440','regiao_id'=>$xi->id]);
        $d4720 = Distrito::create(['distrito'=>'4720','regiao_id'=>$xi->id]);

        $d4720->estados()->attach([$ac->id,$am->id,$rr->id,$ap->id,$ap->id,$ro->id]);
        $d4490->estados()->attach([$ma->id,$pi->id,$ce->id]);
        $d4500->estados()->attach([$rn->id,$pb->id,$pe->id]);
        $d4390->estados()->attach([$al->id,$se->id,$ba->id]);
        $d4550->estados()->attach([$ba->id]);
        $d4530->estados()->attach([$to->id,$go->id]);
        $d4440->estados()->attach($mt->id);
        $d4770->estados()->attach([$go->id,$mg->id,$df->id]);
        $d4470->estados()->attach([$sp->id,$ms->id]);
        $d4760->estados()->attach($mg->id);
        $d4560->estados()->attach($mg->id);
        $d4520->estados()->attach($mg->id);
        $d4530->estados()->attach($mg->id);
        $d4410->estados()->attach($es->id);
        $d4570->estados()->attach($rj->id);
        $d4600->estados()->attach($rj->id);
        $d4750->estados()->attach($rj->id);
        $d4420->estados()->attach($sp->id);
        $d4610->estados()->attach($sp->id);
        $d4620->estados()->attach($sp->id);
        $d4480->estados()->attach($sp->id);
        $d4540->estados()->attach($sp->id);
        $d4590->estados()->attach($sp->id);
        $d4310->estados()->attach($sp->id);
        $d4430->estados()->attach($sp->id);
        $d4510->estados()->attach($sp->id);
        $d4640->estados()->attach($pr->id);
        $d4730->estados()->attach($pr->id);
        $d4710->estados()->attach($pr->id);
        $d4630->estados()->attach($pr->id);
        $d4651->estados()->attach($sc->id);
        $d4650->estados()->attach($sc->id);
        $d4740->estados()->attach($sc->id);
        $d4700->estados()->attach($rs->id);
        $d4660->estados()->attach($rs->id);
        $d4670->estados()->attach($rs->id);
        $d4680->estados()->attach($rs->id);
        $d4780->estados()->attach($rs->id);

    }
}
