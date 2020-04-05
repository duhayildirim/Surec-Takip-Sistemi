<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('is_emirleri_seeder');
         $this->call('kullanicilar_seeder');
         $this->call('toplanti_olustur_seeder');
         $this->call('toplantilar_calisanlar_seeder');
         $this->call('tezgahlar_seeder');
         $this->call('tezgahlar_calisanlar_seeder');
         $this->call('akislar_seeder');
         $this->call('akislar_tezgahlar_seeder');
         $this->call('surecler_seeder');
         $this->call('surecler_akislar_seeder');
    }
}
