<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class akislar_tezgahlar extends Model
{
    use SoftDeletes;

    protected $table = "akislar_tezgahlar";

    protected $fillable = (['akis_id','tezgah_id']);

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

    public function tezgah()
    {
        return $this -> belongsTo(tezgahlar::class , 'tezgah_id');
    }
    public function akis()
    {
        return $this -> belongsTo(akislar::class , 'akis_id');
    }

}
