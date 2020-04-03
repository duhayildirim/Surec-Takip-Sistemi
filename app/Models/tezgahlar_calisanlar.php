<?php

namespace App\Models;

use App\kullanicilar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tezgahlar_calisanlar extends Model
{
    use SoftDeletes;

    protected $table = "tezgahlar_calisanlar";

    protected $fillable = ['tezgah_id','calisan_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function kullanici()
    {
        return $this -> belongsTo(kullanicilar::class,'calisan_id');
    }
    public function tezgah()
    {
        return $this -> belongsTo(tezgahlar::class,'tezgah_id');
    }
}
