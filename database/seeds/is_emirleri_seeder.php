<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class is_emirleri_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('is_emirleri')->truncate();
        DB::table('is_emirleri')->insert(['emir'=>'30 Tane kırmızı fakat ayakları beyaz ahşap masa boyu 1 metreyi geçmeyecek eni 1.5 metre boyu 2.5dan az olmamalı , 1 hafta içerisinde teslime hazır olmalı']);
        DB::table('is_emirleri')->insert(['emir'=>'15 Tane sandalye boyu 1 metreyi geçmeyecek bugün hazır olmalı örnek resmi mesaj olarak attım rengi size bırakıyorum bugün hazır olsun']);
        DB::table('is_emirleri')->insert(['emir'=> '100 tane ahşap tabure klasik tabure ahşap rengi ufak olmalı her hangi bir fonksiyona gerek yok klasik tabure 1 ayınız var']);
        DB::table('is_emirleri')->insert(['emir'=>'yine bir ahşap tabure işi her şey aynı fakat 50 tane olacak']);
    }
}
