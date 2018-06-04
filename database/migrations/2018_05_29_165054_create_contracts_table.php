<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->string('nik',16)->primary();
            $table->string('nmr_registry',15)->nullable();
            $table->string('nama',250);
            $table->date('tgl_lahir');
            $table->integer('jns_kelamin');
            $table->integer('maritas_sts');
            $table->integer('pendidikan');
            $table->integer('pekerjaan');
            $table->string('alamat',255);
            $table->string('kode_kabkota',4);
            $table->string('kode_pos',5);
            $table->string('npwp',15);
            $table->date('mulai_usaha',8);
            $table->string('alamat_usaha',255);
            $table->string('ijin_usaha',255);
            $table->integer('modal_usaha');
            $table->integer('jml_pekerja');
            $table->integer('jml_kredit');
            $table->integer('is_linkage');
            $table->string('linkage',6);
            $table->string('no_hp',16);
            $table->string('uraian_agunan',255)->nullable();
            $table->integer('is_subsidized');
            $table->string('subsidi_sebelumnya',25)->nullable();

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
        Schema::dropIfExists('contracts');
    }
}
