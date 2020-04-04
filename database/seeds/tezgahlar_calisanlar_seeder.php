<?php

use Illuminate\Database\Seeder;

class tezgahlar_calisanlar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tezgahlar_calisanlar')->truncate();
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'1','calisan_id'=>'4']);
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'1','calisan_id'=>'5']);
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'2','calisan_id'=>'6']);
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'3','calisan_id'=>'9']);
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'4','calisan_id'=>'10']);
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'4','calisan_id'=>'11']);
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'5','calisan_id'=>'7']);
        DB::table('tezgahlar_calisanlar')->insert(['tezgah_id'=>'6','calisan_id'=>'8']);
    }
}
