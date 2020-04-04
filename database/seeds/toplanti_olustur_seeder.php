<?php

use Illuminate\Database\Seeder;

class toplanti_olustur_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gelecek_toplantilar')->truncate();
        DB::table('gelecek_toplantilar')->insert(['konu'=>'İzinler','aciklama'=>'İzinlerin tekrar gözden geçirilmesi gerekiyor','tarih'=>'04/04/2020','saat'=>'13:30']);
        DB::table('gelecek_toplantilar')->insert(['konu'=>'Tezgah 4ün Performansı','aciklama'=>'Ürünlerin tezgah 4 de yığılmaya uğraması hakkında','tarih'=>'06/04/2020','saat'=>'09:30']);
        DB::table('gelecek_toplantilar')->insert(['konu'=>'Haftalık Görevler','aciklama'=>'bu haftaki görev dağılımları','tarih'=>'06/04/2020','saat'=>'09:30']);
        DB::table('gelecek_toplantilar')->insert(['konu'=>'Teslimat Gecikmesi','aciklama'=>'bazı süreçlerin gereğinden fazla sürmesi hakkında','tarih'=>'25/04/2020','saat'=>'15:00']);
    }
}
