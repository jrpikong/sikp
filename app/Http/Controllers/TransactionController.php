<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Validator;

class TransactionController extends Controller
{

    public function index()
    {
        $transactions = Transaction::paginate(10);
        return view('pages.transaction.index', compact('transactions'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tgl_transaksi' => 'required|date',
            'tgl_pelaporan' => 'required|date',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'error' => false,
                'code' => '03',
                'message' => $validator->errors()
            ]);
        }

        $crete = Transaction::create($request->all());
        if($crete) {
            return response()->json([
                'error' => false,
                'code' => '00',
                'message' => 'Data berhasil ditambahkan'
            ]);
        }
    }
}
