<?php

use Illuminate\Database\Seeder;

class kullanicilar_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kullanicilar')->truncate();
        DB::table('kullanicilar')->insert(['ad'=>'Duha','soyad'=>'YILDIRIM','sifre'=>Hash::make('12345678'),'email'=>'admin@gmail.com','rol'=>'Admin']);
        DB::table('kullanicilar')->insert(['ad'=>'Ömer','soyad'=>'YELKENCİ','sifre'=>Hash::make('12345678'),'email'=>'ömer@gmail.com','rol'=>'Müdür']);
        DB::table('kullanicilar')->insert(['ad'=>'Selahattin','soyad'=>'GÜNEŞ','sifre'=>Hash::make('12345678'),'email'=>'selahattin@gmail.com','rol'=>'Müdür']);
        DB::table('kullanicilar')->insert(['ad'=>'Sevgi','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'sevgi@gmail.com','rol'=>'İşçi']);
        DB::table('kullanicilar')->insert(['ad'=>'ilayda','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'ilayda@gmail.com','rol'=>'İşçi']);
        DB::table('kullanicilar')->insert(['ad'=>'Berna','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'berna@gmail.com','rol'=>'İşçi']);
        DB::table('kullanicilar')->insert(['ad'=>'Ayça','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'ayca@gmail.com','rol'=>'İşçi']);
        DB::table('kullanicilar')->insert(['ad'=>'Dicle','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'dicle@gmail.com','rol'=>'İşçi']);
        DB::table('kullanicilar')->insert(['ad'=>'İrem','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'irem@gmail.com','rol'=>'İşçi']);
        DB::table('kullanicilar')->insert(['ad'=>'Melisa','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'melisa@gmail.com','rol'=>'İşçi']);
        DB::table('kullanicilar')->insert(['ad'=>'Elif','soyad'=>'YILMAZ','sifre'=>Hash::make('12345678'),'email'=>'elif@gmail.com','rol'=>'İşçi']);
    }
}
