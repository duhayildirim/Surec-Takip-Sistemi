<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class mesajlar extends Model
{
    use SoftDeletes;

    protected $table = "mesajlar";

    protected $fillable = ['konu','mesaj'];

    const CREATED_AT =  'olusturulma_tarihi';

    const UPDATED_AT =  'guncelleme_tarihi';

    const DELETED_AT = 'silinme_tarihi';
}
