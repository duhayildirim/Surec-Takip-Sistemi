<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class surecler extends Model
{
    use SoftDeletes;

    protected $table = "surecler";

    protected $fillable= ['ad','adet','teslim_tarihi','en','boy','yukseklik','detay','resim_url'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi' ;

    public function akis()
    {
        return $this -> belongsTo(surecler_akislar::class , 'id');
    }

    public function tezgahlar()
    {
        return $this -> hasMany(surecler_tezgahlar::class , 'surec_id');
    }
}

