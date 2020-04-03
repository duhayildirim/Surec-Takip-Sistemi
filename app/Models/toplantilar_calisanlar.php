<?php

namespace App\Models;

use App\kullanicilar;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class toplantilar_calisanlar extends Model
{
    use SoftDeletes;

    protected $table = "toplantilar_calisanlar";

    protected $fillable = ['toplanti_id','calisan_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function kullanici()
    {
        return $this -> belongsTo(kullanicilar::class,'calisan_id');
    }
    public function toplanti()
    {
        return $this -> belongsTo(gelecek_toplantilar::class,'toplanti_id');
    }
}
