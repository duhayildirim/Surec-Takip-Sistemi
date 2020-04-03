<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class surecler_akislar_urunler extends Model
{

    use SoftDeletes;

    protected $table = "surecler_akislar_urunler";

    protected $fillable = ['surecler_akislar_id','urunler_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function urun()
    {
        return $this -> belongsTo(urunler::class,'surecler_akislar_urunler_id');
    }

    public function surec_akis()
    {
        return $this -> belongsTo(surecler_akislar::class,'surecler_akislar_urunler_id');
    }

}
