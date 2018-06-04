<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akad extends Model
{
    public $timestamps = false;
    protected $fillable = ['rekening_baru','kode_bank','nik','rekening_lama','status_akad','status_rekening','nomor_akad','tgl_akad',
        'tgl_jatuh_tempo','nilai_akad','kode_penjamin','nomor_penjaminan','nilai_dijamin','skema','sektor','negara_tujuan'];

}
