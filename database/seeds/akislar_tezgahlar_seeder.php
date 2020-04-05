<?php

use Illuminate\Database\Seeder;

class akislar_tezgahlar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('akislar_tezgahlar')->truncate();
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '1', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '1', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '1', 'tezgah_id' => '4']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '1', 'tezgah_id' => '5']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '1', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '2', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '2', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '2', 'tezgah_id' => '3']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '2', 'tezgah_id' => '4']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '2', 'tezgah_id' => '5']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '2', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '3', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '3', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '3', 'tezgah_id' => '5']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '3', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '4', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '4', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '4', 'tezgah_id' => '3']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '4', 'tezgah_id' => '4']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '4', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '5', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '5', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '5', 'tezgah_id' => '3']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '5', 'tezgah_id' => '4']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '5', 'tezgah_id' => '5']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '5', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '6', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '6', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '6', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '7', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '7', 'tezgah_id' => '3']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '7', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '8', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '8', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '8', 'tezgah_id' => '3']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '8', 'tezgah_id' => '4']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '8', 'tezgah_id' => '5']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '8', 'tezgah_id' => '6']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '9', 'tezgah_id' => '1']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '9', 'tezgah_id' => '2']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '9', 'tezgah_id' => '5']);
        DB::table('akislar_tezgahlar')->insert(['akis_id' => '9', 'tezgah_id' => '6']);

    }
}
