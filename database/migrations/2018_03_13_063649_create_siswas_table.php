<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('nama')->nullable()->default(null);
            $table->string('nipd')->nullable()->default(null);
            $table->string('jenis_kelamin')->nullable()->default(null);
            $table->string('tempat_lahir')->nullable()->default(null);
            $table->integer('nik')->nullable()->default(null);
            $table->string('agama')->nullable()->default(null);
            $table->string('alamat')->nullable()->default(null);
            $table->string('rw')->nullable()->default(null);                       
            $table->string('dusun')->nullable()->default(null);
            $table->string('kelurahan')->nullable()->default(null);
            $table->string('kecamatan')->nullable()->default(null);
            $table->string('kode_pos')->nullable()->default(null);
            $table->string('jenis_tinggal')->nullable()->default(null);
            $table->string('alat_transportasi')->nullable()->default(null);
            $table->string('telepon')->nullable()->default(null);
            $table->string('hp')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('skhun')->nullable()->default(null);
            $table->string('penerima_kps')->nullable()->default(null);
            $table->string('nomor_kps')->nullable()->default(null);

            $table->string('nama_ayah')->nullable()->default(null);
            $table->string('tahun_lahir')->nullable()->default(null);
            $table->string('jenjang_pendidikan')->nullable()->default(null);
            $table->string('pekerjaan')->nullable()->default(null);
            $table->string('penghasilan')->nullable()->default(null);
            $table->integer('nik_ayah')->nullable()->default(null);

            $table->string('nama_ibu')->nullable()->default(null);
            $table->string('tahun_lahir_ibu')->nullable()->default(null);
            $table->string('jenjang_pendidikan_ibu')->nullable()->default(null);
            $table->string('pekerjaan_ibu')->nullable()->default(null);
            $table->string('penghasilan_ibu')->nullable()->default(null);
            $table->integer('nik_ibu')->nullable()->default(null);

            $table->string('nama_wali')->nullable()->default(null);
            $table->string('tahun_lahir_wali')->nullable()->default(null);
            $table->string('jenjang_pendidikan_wali')->nullable()->default(null);
            $table->string('pekerjaan_wali')->nullable()->default(null);
            $table->string('penghasilan_wali')->nullable()->default(null);
            $table->integer('nik_wali')->nullable()->default(null);
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
        Schema::dropIfExists('siswas');
    }
}
