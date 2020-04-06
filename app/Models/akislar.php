<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class akislar extends Model
{
    use SoftDeletes;

    protected $table ="akislar";

    protected $fillable = ['ad'];

    const CREATED_AT =  'olusturulma_tarihi';

    const UPDATED_AT =  'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function surecler()
    {
        return $this -> hasMany(surecler_akislar::class , 'akis_id');
    }
    public function tezgahlar()
    {
        return $this -> hasMany(akislar_tezgahlar::class , 'akis_id');
    }

    public function surecVerileri(){
        return $this -> belongsToMany(surecler::class,surecler_akislar::class,'akis_id','surec_id');
    }
}
