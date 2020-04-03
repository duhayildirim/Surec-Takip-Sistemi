<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class biten_urunler extends Model
{
    use SoftDeletes;

    protected $table = "biten_urunler";

    protected $fillable = ['urunler_id','urun_no'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function urun()
    {
        return $this -> belongsTo(urunler::class,'urunler_id');
    }
}
