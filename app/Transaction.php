<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public $timestamps = false;
    public $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_transaksi',
        'kode_bank',
        'rekening_baru',
        'nomor_rekening',
        'tgl_transaksi',
        'tgl_pelaporan',
        'limit',
        'outstanding',
        'angsuran_pokok',
        'kolektibilitas'
    ];
}