<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class gelecek_toplantilar extends Model
{
    use SoftDeletes;

    protected $table = "gelecek_toplantilar";

    protected $fillable = ['konu','aciklama','tarih','saat'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';



    public function kullanicilar()
    {
        return $this -> hasMany(toplantilar_calisanlar::class,'gelecek_toplantilar_id');
    }
}
