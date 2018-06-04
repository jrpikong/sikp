@extends('layouts.app')

@section('content')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Akad</div>

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nik</th>
                                <th scope="col">Kode Bank</th>
                                <th scope="col">Rekening Baru</th>
                                <th scope="col">Rekening Lama</th>
                                <th scope="col">Status Akad</th>
                                <th scope="col">Status Rekening</th>
                                <th scope="col">No Akad</th>
                                <th scope="col">Tanggal Akad</th>
                                <th scope="col">Tanggal Jatuh Tempo</th>
                                <th scope="col">Nilai Akad</th>
                                <th scope="col">Kode Penjamin</th>
                                <th scope="col">Nomor Penjaminan</th>
                                <th scope="col">Nilai Dijamin</th>
                                <th scope="col">Skema</th>
                                <th scope="col">Sektor</th>
                                <th scope="col">Negara Tujuan</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contracts as $i => $contract)
                                <tr>
                                    <th scope="row">{{$i + 1}}</th>
                                    <td>{{$contract->nik}}</td>
                                    <td>{{$contract->kode_bank}}</td>
                                    <td>{{$contract->rekening_baru}}</td>
                                    <td>{{$contract->rekening_lama}}</td>
                                    <td>{{$contract->status_akad}}</td>
                                    <td>{{$contract->status_rekening}}</td>
                                    <td>{{$contract->nomor_akad}}</td>
                                    <td>{{$contract->tgl_akad}}</td>
                                    <td>{{$contract->tgl_jatuh_tempo}}</td>
                                    <td>{{number_format($contract->nilai_akad)}}</td>
                                    <td>{{$contract->kode_penjamin}}</td>
                                    <td>{{$contract->nomor_penjaminan}}</td>
                                    <td>{{$contract->nilai_dijamin}}</td>
                                    <td>{{$contract->skema}}</td>
                                    <td>{{$contract->sektor}}</td>
                                    <td>{{$contract->negara_tujuan}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $contracts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection