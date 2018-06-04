<?php

namespace App\Http\Controllers;

use App\Akad;
use App\Contract;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class AkadController extends Controller
{
    public function index()
    {
        $contracts = Akad::paginate(10);
        return view('pages.akad.index', compact('contracts'));
    }

    public function store(Request $request)
    {
        $checkNik = $this->checkNik($request->nik);
        if (!$checkNik) {
            return response()->json([
                'error' => true,
                'code' => '11',
                'message' => 'Data gagal ditambahkan.'
            ]);
        }

        try {
            $crete = Akad::create($request->all());
            if($crete) {
                return response()->json([
                    'error' => false,
                    'code' => '00',
                    'message' => 'Data berhasil ditambahkan'
                ]);
            }
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];
            if ($errorCode == 1062) {
                return response()->json([
                    'error' => true,
                    'code' => '05',
                    'message' => 'Duplikasi Data ' .$request->nomor_akad
                ]);
            }
        }
    }

    public function show(Request $request)
    {
        $akad =  Akad::where('nik', '=', $request->nik)->first();
        if ($akad) {
            return response()->json([
                'error' => false,
                'code' => '13',
                "message" => "Data ditemukan",
                'data' => $akad
            ]);
        }
        return response()->json([
            'error' => false,
            'code' => '08',
            'message' => 'Data tidak ditemukan'
        ]);
    }

    private function checkNik($nik)
    {
        $avaliableNik = false;
        $nik = Contract::where('nik', '=', $nik)->first();
        if ($nik) {
            return $avaliableNik = true;
        }

        return $avaliableNik;


    }
}
