<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tezgahlar extends Model
{
    use SoftDeletes;

    protected $table = "tezgahlar";

    protected $fillable = ['ad','aciklama'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function surecler()
    {
        return $this -> hasMany(surecler_tezgahlar::class,'tezgah_id');
    }
    public function kullanicilar()
    {
        return $this -> hasMany(tezgahlar_calisanlar::class,'tezgah_id');
    }
    public function akislar()
    {
        return $this -> hasMany(akislar_tezgahlar::class,'tezgah_id');
    }
    public function akis_verileri(){
        return $this->belongsToMany(akislar::class,akislar_tezgahlar::class,'tezgah_id','akis_id');
    }
}
