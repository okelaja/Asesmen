@extends('dashboard.index')
@section('konten')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 order-md-1 order-last">
                <div style="float: right">
                    <a href="{{ route('mahasiswa') }}">
                    <button class="btn btn-warning mt-2">
                    <i class="fa fa-arrow-circle-left"></i> Kembali
                    </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-12 mt-4">
        <div class="card">
            <div class="card-body">
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="w-75" src="https://picsum.photos/200/300" alt="" style="border-radius: 10px">
                        </div>
                        <div class="col-md-8" style="margin-left: -5%">
                            <div class="table-responsive">
                                <table class="table table-lg">
                                    <tr>
                                        <th>Kode</th>
                                        <td>{{$data->kode}}</td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{$data->nama}}</td>
                                    </tr>
                                    <tr>
                                        <th>Umur</th>
                                        <td>{{$data->umur}}</td>
                                    </tr>
                                    <tr>
                                        <th>tangal</th>
                                        <td>{{$data->created_at->now()->isoFormat('dddd, D MMMM Y')}}</td>
                                    </tr>
                                        <th>Alamat</th>
                                        <td>{{$data->alamat}}</td>
                                    </tr>
                                    <tr>
                                        <th>Kota</th>
                                        <td>{{$data->kota}}</td>
                                    </tr>
                                    <tr>
                                        <th>Telepon</th>
                                        <td>{{$data->telepon}}</td>
                                    </tr>
                                    <tr>
                                        <th>Created</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th>Update</th>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>
                                    <tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection