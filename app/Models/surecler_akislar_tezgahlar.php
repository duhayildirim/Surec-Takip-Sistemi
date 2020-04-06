<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class surecler_akislar_tezgahlar extends Model
{
    use SoftDeletes;

    protected $table = "surecler_akislar_tezgahlar";

    protected $fillable = ['surec_akis_id' , 'tezgah_id'];

    const CREATED_AT = 'olusturulma_tarihi';

    const UPDATED_AT = 'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';

}
