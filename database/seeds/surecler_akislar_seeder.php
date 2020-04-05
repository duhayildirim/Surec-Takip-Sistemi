<?php

use Illuminate\Database\Seeder;

class surecler_akislar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surecler_akislar')->truncate();
        DB::table('surecler_akislar')->insert(['surec_id'=>'1','akis_id'=>'2']);
        DB::table('surecler_akislar')->insert(['surec_id'=>'2','akis_id'=>'1']);
        DB::table('surecler_akislar')->insert(['surec_id'=>'3','akis_id'=>'4']);
        DB::table('surecler_akislar')->insert(['surec_id'=>'4','akis_id'=>'4']);
    }
}
