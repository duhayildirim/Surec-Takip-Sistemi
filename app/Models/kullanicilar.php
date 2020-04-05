<?php

namespace App;

use App\Models\tezgahlar_calisanlar;
use App\Models\toplantilar_calisanlar;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class kullanicilar extends Authenticatable
{
    use SoftDeletes;
    protected $table = "kullanicilar";

    protected $fillable = [
        'ad','soyad','sifre','email','rol'
    ];

    protected $hidden = [
        'sifre'
    ];

    const CREATED_AT =  'olusturulma_tarihi';

    const UPDATED_AT =  'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function getAuthPassword()
    {
        return $this ->  sifre;
    }

    public function tezgah()
    {
        return $this -> belongsTo(tezgahlar_calisanlar::class, 'kullanicilar_id');
    }

    public function toplantilar()
    {
        return $this -> hasMany(toplantilar_calisanlar::class,'kullanicilar_id');
    }
}

