<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class surecler_akislar extends Model
{
    use SoftDeletes;

    protected $table = "surecler_akislar";

    protected $fillable = ['surec_id','akis_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function surec()
    {
        return $this -> belongsTo(surecler::class , 'surec_id');
    }

    public function akis()
    {
        return $this -> belongsTo(akislar::class , 'akis_id');
    }

    public function urunler()
    {
        return $this -> hasMany(surecler_akislar_urunler::class,'surecler_akislar_id');
    }
}
