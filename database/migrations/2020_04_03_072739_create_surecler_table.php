<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSureclerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surecler', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->integer('adet');
            $table->text('teslim_tarihi');
            $table->integer('en')->nullable();
            $table->integer('boy')->nullable();
            $table->integer('yukseklik')->nullable();
            $table->text('detay')->nullable();
            $table->text('resim_url')->nullable();
            $table->timestamp('olusturulma_tarihi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('guncelleme_tarihi')->default(DB::raw('CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('silinme_tarihi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surecler');
    }
}
