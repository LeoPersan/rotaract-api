<?php

use Illuminate\Database\Seeder;
use App\MsSQL\Clube;
use App\MsSQL\Distrito;
use App\MsSQL\Estado;
use App\MsSQL\Regiao;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return voID
     */
    public function run()
    {
        $i = Regiao::create(['REGIAO'=>'I']);
        $ii = Regiao::create(['REGIAO'=>'II']);
        $iii = Regiao::create(['REGIAO'=>'III']);
        $iv = Regiao::create(['REGIAO'=>'IV']);
        $v = Regiao::create(['REGIAO'=>'V']);
        $vi = Regiao::create(['REGIAO'=>'VI']);
        $vii = Regiao::create(['REGIAO'=>'VII']);
        $viii = Regiao::create(['REGIAO'=>'VIII']);
        $ix = Regiao::create(['REGIAO'=>'IX']);
        $x = Regiao::create(['REGIAO'=>'X']);
        $xi = Regiao::create(['REGIAO'=>'XI']);

        $ac = Estado::find(1);
        $al = Estado::find(2);
        $ap = Estado::find(3);
        $am = Estado::find(4);
        $ba = Estado::find(5);
        $ce = Estado::find(6);
        $df = Estado::find(7);
        $es = Estado::find(8);
        $go = Estado::find(9);
        $ma = Estado::find(10);
        $mt = Estado::find(11);
        $ms = Estado::find(12);
        $mg = Estado::find(13);
        $pa = Estado::find(14);
        $pb = Estado::find(15);
        $pr = Estado::find(16);
        $pe = Estado::find(17);
        $pi = Estado::find(18);
        $rj = Estado::find(19);
        $rn = Estado::find(20);
        $rs = Estado::find(21);
        $ro = Estado::find(22);
        $rr = Estado::find(23);
        $sc = Estado::find(24);
        $sp = Estado::find(25);
        $se = Estado::find(26);
        $to = Estado::find(27);

        $d4660 = Distrito::where(['DISTRITO'=>'4660'])->first();//i
        $d4670 = Distrito::where(['DISTRITO'=>'4670'])->first();//i
        $d4680 = Distrito::where(['DISTRITO'=>'4680'])->first();//i
        $d4700 = Distrito::where(['DISTRITO'=>'4700'])->first();//i
        $d4780 = Distrito::where(['DISTRITO'=>'4780'])->first();//i
        $d4650 = Distrito::where(['DISTRITO'=>'4650'])->first();//ii
        $d4651 = Distrito::where(['DISTRITO'=>'4651'])->first();//ii
        $d4740 = Distrito::where(['DISTRITO'=>'4740'])->first();//ii
        $d4510 = Distrito::where(['DISTRITO'=>'4510'])->first();//iii
        $d4630 = Distrito::where(['DISTRITO'=>'4630'])->first();//iii
        $d4640 = Distrito::where(['DISTRITO'=>'4640'])->first();//iii
        $d4710 = Distrito::where(['DISTRITO'=>'4710'])->first();//iii
        $d4730 = Distrito::where(['DISTRITO'=>'4730'])->first();//iii
        $d4310 = Distrito::where(['DISTRITO'=>'4310'])->first();//iv
        $d4480 = Distrito::where(['DISTRITO'=>'4480'])->first();//iv
        $d4540 = Distrito::where(['DISTRITO'=>'4540'])->first();//iv
        $d4590 = Distrito::where(['DISTRITO'=>'4590'])->first();//iv
        $d4620 = Distrito::where(['DISTRITO'=>'4620'])->first();//iv
        $d4410 = Distrito::where(['DISTRITO'=>'4410'])->first();//v
        $d4420 = Distrito::where(['DISTRITO'=>'4420'])->first();//v
        $d4430 = Distrito::where(['DISTRITO'=>'4430'])->first();//v
        $d4570 = Distrito::where(['DISTRITO'=>'4570'])->first();//v
        $d4600 = Distrito::where(['DISTRITO'=>'4600'])->first();//v
        $d4610 = Distrito::where(['DISTRITO'=>'4610'])->first();//v
        $d4750 = Distrito::where(['DISTRITO'=>'4750'])->first();//v
        $d4520 = Distrito::where(['DISTRITO'=>'4520'])->first();//vi
        $d4560 = Distrito::where(['DISTRITO'=>'4560'])->first();//vi
        $d4580 = Distrito::where(['DISTRITO'=>'4580'])->first();//vi
        $d4760 = Distrito::where(['DISTRITO'=>'4760'])->first();//vi
        $d4470 = Distrito::where(['DISTRITO'=>'4470'])->first();//vii
        $d4530 = Distrito::where(['DISTRITO'=>'4530'])->first();//vii
        $d4770 = Distrito::where(['DISTRITO'=>'4770'])->first();//vii
        $d4390 = Distrito::where(['DISTRITO'=>'4390'])->first();//viii
        $d4550 = Distrito::where(['DISTRITO'=>'4550'])->first();//viii
        $d4490 = Distrito::where(['DISTRITO'=>'4490'])->first();//x
        $d4500 = Distrito::where(['DISTRITO'=>'4500'])->first();//x
        $d4440 = Distrito::where(['DISTRITO'=>'4440'])->first();//xi
        $d4720 = Distrito::where(['DISTRITO'=>'4720'])->first();//xi

        $d4660->regiao()->attach($i->ID);
        $d4670->regiao()->attach($i->ID);
        $d4680->regiao()->attach($i->ID);
        $d4700->regiao()->attach($i->ID);
        $d4780->regiao()->attach($i->ID);
        $d4650->regiao()->attach($ii->ID);
        $d4651->regiao()->attach($ii->ID);
        $d4740->regiao()->attach($ii->ID);
        $d4510->regiao()->attach($iii->ID);
        $d4630->regiao()->attach($iii->ID);
        $d4640->regiao()->attach($iii->ID);
        $d4710->regiao()->attach($iii->ID);
        $d4730->regiao()->attach($iii->ID);
        $d4310->regiao()->attach($iv->ID);
        $d4480->regiao()->attach($iv->ID);
        $d4540->regiao()->attach($iv->ID);
        $d4590->regiao()->attach($iv->ID);
        $d4620->regiao()->attach($iv->ID);
        $d4410->regiao()->attach($v->ID);
        $d4420->regiao()->attach($v->ID);
        $d4430->regiao()->attach($v->ID);
        $d4570->regiao()->attach($v->ID);
        $d4600->regiao()->attach($v->ID);
        $d4610->regiao()->attach($v->ID);
        $d4750->regiao()->attach($v->ID);
        $d4520->regiao()->attach($vi->ID);
        $d4560->regiao()->attach($vi->ID);
        $d4580->regiao()->attach($vi->ID);
        $d4760->regiao()->attach($vi->ID);
        $d4470->regiao()->attach($vii->ID);
        $d4530->regiao()->attach($vii->ID);
        $d4770->regiao()->attach($vii->ID);
        $d4390->regiao()->attach($viii->ID);
        $d4550->regiao()->attach($viii->ID);
        $d4490->regiao()->attach($x->ID);
        $d4500->regiao()->attach($x->ID);
        $d4440->regiao()->attach($xi->ID);
        $d4720->regiao()->attach($xi->ID);

        $d4720->estados()->attach([$ac->ID,$am->ID,$rr->ID,$ap->ID,$ap->ID,$ro->ID]);
        $d4490->estados()->attach([$ma->ID,$pi->ID,$ce->ID]);
        $d4500->estados()->attach([$rn->ID,$pb->ID,$pe->ID]);
        $d4390->estados()->attach([$al->ID,$se->ID,$ba->ID]);
        $d4550->estados()->attach([$ba->ID]);
        $d4530->estados()->attach([$to->ID,$go->ID]);
        $d4440->estados()->attach($mt->ID);
        $d4770->estados()->attach([$go->ID,$mg->ID,$df->ID]);
        $d4470->estados()->attach([$sp->ID,$ms->ID]);
        $d4760->estados()->attach($mg->ID);
        $d4560->estados()->attach($mg->ID);
        $d4520->estados()->attach($mg->ID);
        $d4530->estados()->attach($mg->ID);
        $d4410->estados()->attach($es->ID);
        $d4570->estados()->attach($rj->ID);
        $d4600->estados()->attach($rj->ID);
        $d4750->estados()->attach($rj->ID);
        $d4420->estados()->attach($sp->ID);
        $d4610->estados()->attach($sp->ID);
        $d4620->estados()->attach($sp->ID);
        $d4480->estados()->attach($sp->ID);
        $d4540->estados()->attach($sp->ID);
        $d4590->estados()->attach($sp->ID);
        $d4310->estados()->attach($sp->ID);
        $d4430->estados()->attach($sp->ID);
        $d4510->estados()->attach($sp->ID);
        $d4640->estados()->attach($pr->ID);
        $d4730->estados()->attach($pr->ID);
        $d4710->estados()->attach($pr->ID);
        $d4630->estados()->attach($pr->ID);
        $d4651->estados()->attach($sc->ID);
        $d4650->estados()->attach($sc->ID);
        $d4740->estados()->attach($sc->ID);
        $d4700->estados()->attach($rs->ID);
        $d4660->estados()->attach($rs->ID);
        $d4670->estados()->attach($rs->ID);
        $d4680->estados()->attach($rs->ID);
        $d4780->estados()->attach($rs->ID);

    }
}
