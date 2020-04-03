<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class is_emirleri extends Model
{
    use SoftDeletes;

    protected $table = "is_emirleri";

    protected $fillable = ['emir'];

    const CREATED_AT =  'olusturulma_tarihi';

    const UPDATED_AT =  'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';
}
