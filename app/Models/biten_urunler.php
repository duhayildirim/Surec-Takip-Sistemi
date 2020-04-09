<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class biten_urunler extends Model
{
    use SoftDeletes;

    protected $table = "biten_urunler";

    protected $fillable = ['surec_id','urun_no','tezgah_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function urun()
    {
        return $this -> belongsTo(urunler::class,'urunler_id');
    }

    public function surec()
    {
        return $this -> belongsTo(surecler::class,'surec_id');
    }

    public function tezgah()
    {
        return $this -> belongsTo(tezgahlar::class,'tezgah_id');
    }
}
