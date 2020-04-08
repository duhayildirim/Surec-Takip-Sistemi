<?php

use Illuminate\Database\Seeder;

class biten_urunler_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('biten_urunler')->truncate();
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'1','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'2','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'3','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'4','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'5','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'6','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'7','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'8','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'9','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'10','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'11','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'12','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'13','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'14','tezgah_id'=>'6']);
        DB::table('biten_urunler')->insert(['surec_id'=>'1','urun_no'=>'15','tezgah_id'=>'6']);
    }
}
