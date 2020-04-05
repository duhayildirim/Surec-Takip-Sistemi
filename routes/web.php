<?php

use Illuminate\Support\Facades\Route;

Route::get('/','giris_controller@icerik')->name('giris');
Route::post('/giris','giris_controller@kullanici_giris')->name('kullanici_giris');
Route::post('/cikis','giris_controller@kullanici_cikis')->name('kullanici_cikis');

Route::get('/kayit_ol','kayit_ol_controller@icerik')->name('kayit_ol');
Route::post('/kayit_ol','kayit_ol_controller@kullanici_kayit')->name('kullanici_kayit');

Route::group(['middleware' => 'auth'] ,function () {

    Route::get('/anasayfa','anasayfa_controller@icerik')->name('anasayfa');

    Route::get('/yardim','yardim_controller@icerik')->name('yardim');

    Route::group(['prefix' => 'calisanlar'], function () {
        Route::get('/ekip_listesi','calisanlar\ekip_listesi_controller@icerik')->name('ekip_listesi');
        Route::get('/duzenle/{id}','calisanlar\duzenle_controller@icerik')->name('duzenle');
        Route::post('/calisan_guncelle/{id}','calisanlar\duzenle_controller@calisan_guncelle')->name('calisan_guncelle');
        Route::post('/calisan_sil/{id}','calisanlar\duzenle_controller@calisan_sil')->name('calisan_sil');
    });

    Route::group(['prefix' => 'mesajlar'], function () {
        Route::get('/gelen_kutusu','mesajlar\gelen_kutusu_controller@icerik')->name('gelen_kutusu');
        Route::get('/mesaj_olustur','mesajlar\mesaj_olustur_controller@icerik')->name('mesaj_olustur');
        Route::get('/mesaji_oku','mesajlar\mesaji_oku_controller@icerik')->name('mesaji_oku');
    });

    Route::group(['prefix' => 'performans'], function () {
        Route::get('/isciler' ,'performans\isciler_controller@icerik')->name('isciler');
        Route::get('/tezgahlar','performans\tezgahlar_controller@icerik')->name('tezgahlar');
        Route::get('/uretim','performans\uretim_controller@icerik')->name('uretim');
    });

    Route::group(['prefix' => 'toplantilar'], function () {
        Route::get('/gelecek_toplantilar','toplantilar\gelecek_toplantilar_controller@icerik')->name('gelecek_toplantilar');
        Route::get('/toplanti_olustur','toplantilar\toplanti_olustur_controller@icerik')->name('toplanti_olustur');
        Route::post('/toplanti_kaydet','toplantilar\toplanti_olustur_controller@toplanti_kaydet')->name('toplanti_kaydet');
        Route::post('/toplanti_sil/{id}','toplantilar\gelecek_toplantilar_controller@toplanti_sil')->name('toplanti_sil');
    });

    Route::group(['prefix' => 'uretimhane'], function () {
        Route::get('/is_emri_ver','uretimhane\is_emri_ver_controller@icerik')->name('is_emri_ver');
        Route::post('is_emri_ver','uretimhane\is_emri_ver_controller@kaydet')->name('is_emrini_kaydet');
        Route::get('/is_tanimi','uretimhane\is_tanimi_controller@icerik')->name('is_tanimi');
        Route::get('/tezgah_yarat','uretimhane\tezgah_yarat_controller@icerik')->name('tezgah_yarat');
        Route::post('/tezgah_kaydet','uretimhane\tezgah_yarat_controller@tezgah_kaydet')->name('tezgah_kaydet');
        Route::get('/sureci_baslat/{id}','uretimhane\sureci_baslat_controller@sureci_baslat')->name('sureci_baslat');
        Route::post('/sureci_kaydet','uretimhane\sureci_baslat_controller@sureci_kaydet')->name('sureci_kaydet');
        Route::get('/surecler','uretimhane\surec_controller@icerik')->name('surec');
        Route::get('/surec_detay/{id}','uretimhane\surec_controller@icerik_detay')->name('surec_detay');
        Route::get('/is_takip','uretimhane\tezgaha_is_ver_controller@icerik')->name('is_takip');
        Route::get('/akislar','uretimhane\akislar_controller@icerik')->name('akis_olustur');
        Route::post('/akis_kaydet','uretimhane\akislar_controller@akis_kaydet')->name('akis_kaydet');
        Route::get('/akis_listesi','uretimhane\akislar_controller@akis_listesi')->name('akis_listesi');
        Route::post('/akis_sil/{id}','uretimhane\akislar_controller@akis_sil')->name('akis_sil');
        Route::get('/tezgahlari_gor','uretimhane\tezgahlari_gor_controller@icerik')->name('tezgahlari_gor');
        Route::get('/tezgahina_git','uretimhane\tezgahina_git\tezgahina_git_controller@icerik')->name('tezgahina_git');
        Route::get('/tezgah_detay','uretimhane\tezgahina_git\tezgah_detay_controller@icerik')->name('tezgah_detay');
        Route::get('/biten_urunler','uretimhane\biten_urunler_controller@icerik')->name('biten_urunler');
    });
});

