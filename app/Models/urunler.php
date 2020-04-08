<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class urunler extends Model
{
    use SoftDeletes;

    protected $table = "urunler";

    protected $fillable = ['tezgah_id','urun_no'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function surec_akis()
    {
        return $this -> belongsTo(surecler_akislar_urunler::class,'urunler_id');
    }
    public function tezgah()
    {
        return $this -> belongsTo(tezgahlar::class,'tezgah_id');
    }
}
