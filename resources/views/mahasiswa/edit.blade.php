@extends('dashboard.index')
@section('konten')
<div class="row mb-3">
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
<div class="row">
    <section id="multiple-column-form">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">EDIT DATA MAHASISWA</h4>
                    </div>
                    <div class="card-body">
                        <small class="text-danger">* wajib di isi</small>
                        <form action="{{route('mahasiswa.update',$data['id'])}}" class="form" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="first-name-column">Kode</label>
                                        <input type="text" value="{{$data['kode']}}" id="kode" class="form-control @error('kode') is-invalid @enderror"
                                            placeholder="Kode" name="kode">
                                        @error('kode')
                                            <p>{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Nama</label>
                                        <input type="text" value="{{$data['nama']}}" id="nama" class="form-control @error('nama') is-invalid @enderror"
                                            placeholder="Nama" name="nama">
                                        @error('nama')
                                            <p>{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="last-name-column">Umur</label>
                                        <input type="text" value="{{$data['umur']}}" id="umur" class="form-control @error('umur') is-invalid @enderror"
                                            placeholder="Umur" name="umur">
                                        @error('umur')
                                            <p>{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="city-column">Alamat</label>
                                        <input type="text" value="{{$data['alamat']}}" id="alamat" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat"
                                            name="alamat">
                                        @error('alamat')
                                            <p>{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="country-floating">Kota</label>
                                        <input type="text" value="{{$data['kota']}}" id="kota" class="form-control @error('kota') is-invalid @enderror"
                                            name="kota" placeholder="Kota">
                                        @error('kota')
                                            <p>{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="company-column">Telepon</label>
                                        <input type="text" value="{{$data['telepon']}}" id="telepon" class="form-control @error('telepon') is-invalid @enderror"
                                            name="telepon" placeholder="Telepon">
                                        @error('telepon')
                                            <p>{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="form-group col-12">
                                    <div class='form-check'>
                                        <div class="checkbox">
                                            <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                            <label for="checkbox5">Remember Me</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </section>
</div>
@endsection