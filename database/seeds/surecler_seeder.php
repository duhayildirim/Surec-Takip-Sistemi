<?php

use Illuminate\Database\Seeder;

class surecler_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surecler')->truncate();
        DB::table('surecler')->insert(['ad'=>'Ahşap Masa Siparişi','adet'=>'30','teslim_tarihi'=>'30/04/2020','en'=>'50','boy'=>'150','yukseklik'=>'100','detay'=>'Full ahşap rengi halinde hazırlanmasını istiyorum']);
        DB::table('surecler')->insert(['ad'=>'Garantiye Gönderilen Sandalyeler','adet'=>'15','teslim_tarihi'=>'25/04/2020','detay'=>'Sandalyelerin yüzeyinin pürüzsüz olmasına özen gösterin. Sandalyenin ayakları beyaz olmalı']);
        DB::table('surecler')->insert(['ad'=>'Çay Ocağı Tabure Siparişi','adet'=>'100','teslim_tarihi'=>'01/05/2020','detay'=>'klasik ahşap rengi tabure']);
        DB::table('surecler')->insert(['ad'=>'Ek Tabure Siparişi','adet'=>'50','teslim_tarihi'=>'07/05/2020','detay'=>'çay ocağı taburelerinden 50 tane daha istiyorum']);
    }
}
