@extends('layouts.app')

@section('content')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Transactions</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Kode Bank</th>
                                <th scope="col">Rekening Baru</th>
                                <th scope="col">Tanggal Transaksi</th>
                                <th scope="col">Tanggal Pelaporan</th>
                                <th scope="col">Limit</th>
                                <th scope="col">Outstanding</th>
                                <th scope="col">Angsuran Pokok</th>
                                <th scope="col">Kolektibilitas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($transactions as $i => $transaction)
                                <tr>
                                    <th scope="row">{{$i + 1}}</th>
                                    <td>{{$transaction->kode_bank}}</td>
                                    <td>{{$transaction->rekening_baru}}</td>
                                    <td>{{$transaction->tgl_transaksi}}</td>
                                    <td>{{$transaction->tgl_pelaporan}}</td>
                                    <td>{{number_format($transaction->limit)}}</td>
                                    <td>{{number_format($transaction->outstanding)}}</td>
                                    <td>{{number_format($transaction->angsuran_pokok)}}</td>
                                    <td>{{$transaction->kolektibilitas}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $transactions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection