<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanHoaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_hoax', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pelapor',100);
            $table->string('email_pelapor',100)->nullable();
            $table->string('judul_laporan',100);
            $table->string('detail_laporan',500);
            $table->string('gambar1',100)->nullable();
            $table->string('gambar2',100)->nullable();
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
        Schema::dropIfExists('laporan_hoax');
    }
}
