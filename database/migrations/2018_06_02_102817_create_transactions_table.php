<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->integer('id_transaksi')->autoIncrement()->primary();
            $table->string('kode_bank',4);
            $table->string('rekening_baru',40);
            $table->date('tgl_transaksi');
            $table->date('tgl_pelaporan');
            $table->integer('limit');
            $table->integer('outstanding');
            $table->integer('angsuran_pokok');
            $table->integer('kolektibilitas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
