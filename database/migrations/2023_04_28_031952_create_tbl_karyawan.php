<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_karyawan', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 40);
            $table->string('tempat_tgl_lahir', 40);
            $table->string('alamat', 65);
            $table->string('jenis_kelamin', 9);
            $table->string('status_perkawinan', 11);
            $table->string('status_karyawan', 11);
            $table->string('jabatan', 60);
            $table->string('no_hp', 13);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_karyawan');
    }
};
