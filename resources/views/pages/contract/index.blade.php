@extends('layouts.app')

@section('content')

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Calon</div>

                    <div class="card-body">
                        <form  method="get" action="{{route('contract')}}">
                            <div class="row">
                                <div class="input-group mb-2 mr-sm-2 col-md-6">
                                    <input type="text" class="form-control" name="nik" id="inlineFormInputGroupUsername2" placeholder="Nik">
                                    <div class="input-group-prepend">
                                        <button class="input-group-text">Cari</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nik</th>
                                <th scope="col">No Register</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NPWP</th>
                                <th scope="col">Alamat Usaha</th>
                                <th scope="col">Jumlah Pekerja</th>
                                <th scope="col">Jumlah Kredit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contracts as $i => $contract)
                                <tr>
                                    <th scope="row">{{$i + 1}}</th>
                                    <td>{{$contract->nik}}</td>
                                    <td>{{$contract->nmr_registry}}</td>
                                    <td>{{$contract->nama}}</td>
                                    <td>{{$contract->npwp}}</td>
                                    <td>{{$contract->alamat_usaha}}</td>
                                    <td>{{$contract->jml_pekerja}}</td>
                                    <td>{{number_format($contract->jml_kredit)}}</td>
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