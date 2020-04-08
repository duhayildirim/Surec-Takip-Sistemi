<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class surecler_urunler extends Model
{
    use SoftDeletes;

    protected $table="surecler_urunler";

    protected $fillable=['surec_id','urun_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function surec()
    {
        return $this -> belongsTo(surecler::class,'surec_id');
    }
    public function urun()
    {
        return $this -> belongsTo(urunler::class,'urun_id');
    }
}
