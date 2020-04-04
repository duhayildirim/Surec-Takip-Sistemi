<?php

use Illuminate\Database\Seeder;

class tezgahlar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tezgahlar')->truncate();
        DB::table('tezgahlar')->insert(['ad'=>'Tezgah 1','aciklama'=>'İlk ürün genelde bu tezgahtan çıkar. Hammaddeyi işler ve işlevsel bir hale getirir. Bir sonraki işlem tezgahına gönderir']);
        DB::table('tezgahlar')->insert(['ad'=>'Tezgah 2','aciklama'=>'Kesim ve Doğrama tezgahıdır. İstenilen ebatlarda kesimler gerçekleştirir.']);
        DB::table('tezgahlar')->insert(['ad'=>'Tezgah 3','aciklama'=>'Zımparalama tezgahıdır. Ürün düzgün pürüzsüz bir hale bu tezgahta gelir']);
        DB::table('tezgahlar')->insert(['ad'=>'Tezgah 4','aciklama'=>'Birleştirme tezgahıdır. Ürünün vidalama çivileme işlemleri burada gerçekleştirilir']);
        DB::table('tezgahlar')->insert(['ad'=>'Tezgah 5','aciklama'=>'Boyama tezgahıdır . Ürün teslimden önce istenilen renge burada boyanır gerekirse fırınlanır']);
        DB::table('tezgahlar')->insert(['ad'=>'Tezgah 6','aciklama'=>'Rötuş bölümüdür . Ürünün bitmiş hali müşteriye gitmeden burada incelenir, herhangi bir problem burada fark edilir ve ilgili birime yönlendirilir. Aksi takdirde ürün bitmiş ürünler deposuna gönderilir']);
    }
}
