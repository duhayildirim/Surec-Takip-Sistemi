<?php

use Illuminate\Database\Seeder;

class toplantilar_calisanlar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toplantilar_calisanlar')->truncate();
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'1','calisan_id'=>'2']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'1','calisan_id'=>'4']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'1','calisan_id'=>'5']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'1','calisan_id'=>'6']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'1','calisan_id'=>'7']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'1','calisan_id'=>'8']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'2','calisan_id'=>'1']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'2','calisan_id'=>'2']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'2','calisan_id'=>'3']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'3']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'4']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'5']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'6']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'7']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'8']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'9']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'10']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'3','calisan_id'=>'11']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'4','calisan_id'=>'1']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'4','calisan_id'=>'2']);
        DB::table('toplantilar_calisanlar')->insert(['toplanti_id'=>'4','calisan_id'=>'3']);

    }
}

