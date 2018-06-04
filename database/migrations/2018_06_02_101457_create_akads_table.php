<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAkadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('akads', function (Blueprint $table) {
            $table->string('rekening_baru',40)->primary();
            $table->string('kode_bank',4);
            $table->string('nik',16)->unique();
            $table->string('rekening_lama',40);
            $table->integer('status_akad');
            $table->string('status_rekening');
            $table->string('nomor_akad',45);
            $table->date('tgl_akad');
            $table->date('tgl_jatuh_tempo');
            $table->integer('nilai_akad');
            $table->integer('kode_penjamin');
            $table->string('nomor_penjaminan', 45);
            $table->integer('nilai_dijamin');
            $table->string('skema', 2);
            $table->string('sektor', 6);
            $table->integer('negara_tujuan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('akads');
    }
}
