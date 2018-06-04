<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    public $timestamps = false;
    protected $fillable = ['nik','nmr_registry','nama','tgl_lahir','jns_kelamin','maritas_sts','pendidikan','pekerjaan','alamat',
        'kode_kabkota','kode_pos','npwp','mulai_usaha','alamat_usaha','ijin_usaha','modal_usaha',
        'jml_pekerja','jml_kredit','is_linkage','linkage','no_hp','uraian_agunan','is_subsidized','subsidi_sebelumnya',
    ];
}
