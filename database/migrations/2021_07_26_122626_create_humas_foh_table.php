<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHumasFohTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('humas_foh', function (Blueprint $table) {
            $table->id();
            $table->string('judul_hoax',100);
            $table->text('detail_hoax',500);
            $table->string('gambar_hoax',100);
            $table->string('judul_fakta',100);
            $table->string('detail_fakta',500);
            $table->string('gambar_fakta',300);
            $table->string('bukti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('humas_foh');
    }
}
