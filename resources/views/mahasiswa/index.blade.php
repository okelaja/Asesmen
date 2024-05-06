@extends('dashboard.index')
@section('konten')
<div class="row">
    <div class="col-6">      
    </div>
    <div class="col-6">
        <form action="" method="get">
            <div class="input-group mb-3">
                <input type="search" name="search" placeholder="Search..." class="form-control">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-search"></i>Cari
                </button>
            </div>
        </form>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4>DATA MAHASISWA</h4>
            </div>
            <section class="section">
                <div class="row" id="basic-table">
                    <div class="col-12 col-md-12">
                        <div class="card">       
                            <div class="card-body">
                                <div class="table-responsive" style="margin-top:-3% ;">
                                    <table class="table table-lg">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>KODE</th>
                                                <th>NAMA</th>
                                                <th>UMUR</th>
                                                <th>ALAMAT</th>
                                                <th>KOTA</th>
                                                <th>TELEPON</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @php
                                                $no = 1;
                                            @endphp
                                            @foreach ($data as $mahasiswa)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$mahasiswa->kode}}</td>
                                                <td class="text-bold-500">{{$mahasiswa->nama}}</td>
                                                <td class="">{{$mahasiswa->umur}}</td>
                                                <td>{{$mahasiswa->alamat}}</td>
                                                <td class="text-bold-500">{{$mahasiswa->kota}}</td>
                                                <td>{{$mahasiswa->telepon}}</td>
                                                <td>
                                                    <a href="{{ route('mahasiswa.show',$mahasiswa->id) }}">
                                                        <button class="btn btn-primary">
                                                            <i class="bi bi-eye"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('mahasiswa.edit',$mahasiswa->id) }}">
                                                        <button class="btn btn-warning">
                                                            <i class="bi bi-pencil"></i>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('mahasiswa.delete',$mahasiswa->id) }}">
                                                        <button class="btn btn-danger"  onclick="return confirm('are you sure')" >
                                                            <i class="bi bi-trash"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{-- {!!$data->withQueryString()->links('pagination::bootstrap-5')!!} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
