<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class surecler_tezgahlar extends Model
{
    use SoftDeletes;

    protected $table = "surecler_tezgahlar";

    protected $fillable = ['surec_id','tezgah_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function tezgah()
    {
        return $this -> belongsTo(tezgahlar::class ,'tezgah_id');
    }
    public function surec()
    {
        return $this -> belongsTo(surecler::class , 'surec_id');
    }
}
