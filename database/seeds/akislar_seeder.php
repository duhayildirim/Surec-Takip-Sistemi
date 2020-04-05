<?php

use Illuminate\Database\Seeder;

class akislar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('akislar')->truncate();
        DB::table('akislar')->insert(['ad'=>'Sandalye Akışı']);
        DB::table('akislar')->insert(['ad'=>'Masa Akışı']);
        DB::table('akislar')->insert(['ad'=>'Dolap Akışı']);
        DB::table('akislar')->insert(['ad'=>'Tabure Akışı']);
        DB::table('akislar')->insert(['ad'=>'Çalışma Masası Akışı']);
        DB::table('akislar')->insert(['ad'=>'Kapı Akışı']);
        DB::table('akislar')->insert(['ad'=>'Komodin Akışı']);
        DB::table('akislar')->insert(['ad'=>'Büstiyer Akışı']);
        DB::table('akislar')->insert(['ad'=>'Vestiyer Akışı']);
    }
}
