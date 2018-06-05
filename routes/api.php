<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('calon', function (Request $request) {
    /*Check panjang nik dan nomor registry*/
    if(strlen($request->nik) != 16 || strlen($request->nmr_registry) >= 15){
        return response()->json([
            'error' => true,
            'code' => '03',
            'message' => 'Format Data Tidak Sesuai'
        ]);
    }
    /*Check Duplikasi Nik*/
    $nik = \App\Contract::where('nik', '=', $request->nik)->first();
    if ($nik) {
        return response()->json([
            'error' => true,
            'code' => '04',
            'message' => 'Duplikasi Data'. $request->nik
        ]);
    }

    $create =  \App\Contract::create($request->all());
    if ($create) {
        return response()->json([
            'error' => false,
            'code' => '00',
            'message' => 'Data berhasil ditambahkan'
        ]);
    }
});

Route::get('calon/{nik}', function (Request $request) {
    $akad =  \App\Contract::where('nik', '=', $request->nik)->first();
    if ($akad) {
        return response()->json([
            'error' => false,
            'code' => '12',
            "message" => "Data ditemukan",
            'data' => $akad
        ]);
    }
    return response()->json([
        'error' => false,
        'code' => '07',
        'message' => 'Data tidak ditemukan'
    ]);
});

//Akad
Route::get('akad/{nik}', 'AkadController@show');
Route::post('akad', 'AkadController@store');

Route::post('transaction', 'TransactionController@store');