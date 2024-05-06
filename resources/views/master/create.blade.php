<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================--><!--    Document Title--><!-- ===============================================-->
    <title>Website - Mazer web Website</title>


    <!-- ===============================================--><!--    Favicons--><!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('rer') }}/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('rer') }}/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('rer') }}/assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" href="{{ asset('dist') }}/assets/compiled/svg/favicon.svg" type="image/x-icon">

    <link rel="manifest" href="{{ asset('rer') }}/assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="{{ asset('rer') }}/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================--><!--    Stylesheets--><!-- ===============================================-->
    <link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('rer') }}/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="{{ asset('rer') }}/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('rer') }}/assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  </head>

  <body>

    <div class="container">
        <div class="row">
         <section class="bg-300 position-relative z-0" id="contact">
            <div class="container py-8 py-lg-9">
              <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                  <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                      <a href="{{url('/')}}"><h2 class="fs-4 fs-lg-3 fw-bold text-center mb-2 lh-sm">Daftarkan Diri Anda Segera</h2></a>
                    </div>
                    <small class="text-danger mb-5">* wajib di isi</small>
                      <form action="{{route('mahasiswa.store')}}" class="form" method="POST">
                        @csrf
                        <div class="row">
                            <div class="mb-1 w-100">
                                <label for="">Kode</label>
                                <input class="form-control fs-6 @error('kode') is-invalid @enderror" id="kode" name="kode" type="text" placeholder="Masukkan Kode"/>
                                @error('kode')
                                    <p class="mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-1 w-100">
                                <label for="">Nama</label>
                                <input class="form-control fs-6 @error('nama') is-invalid @enderror" id="nama" name="nama" type="tetx" placeholder="Masukkan Nama"/>
                                @error('nama')
                                    <p class="mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-1 w-100">
                                <label for="">Umur</label>
                                <input class="form-control fs-6 @error('umur') is-invalid @enderror" id="umur" name="umur" type="tetx" placeholder="Masukkan Umur"/>
                                @error('umur')
                                    <p class="mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-1 w-100">
                                <label for="">Alamat</label>
                                <input class="form-control fs-6 @error('alamat') is-invalid @enderror" id="alamat" name="alamat" type="tetx" placeholder="Masukkan Alamat"/>
                                @error('alamat')
                                    <p class="mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-1 w-100">
                                <label for="">Kota</label>
                                <input class="form-control fs-6 @error('kota') is-invalid @enderror" id="kota" name="kota" type="tetx" placeholder="Masukkan Kota"/>
                                @error('kota')
                                    <p class="mt-1">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="mb-2 w-100">
                                <label for="">Telepon</label>
                                <input class="form-control fs-6 @error('telepon') is-invalid @enderror" id="telepon" name="telepon" type="tetx" placeholder="Masukkan Telepon"/>
                                @error('telepon')
                                    <p class="mt-1">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                          <button class="btn btn-lg btn-success mb-x1 me-1 mb-1" type="submit"> Kirim </button>
                          <button class="btn btn-lg btn-danger mb-x1" type="reset"> Reset </button>
                        </div>
                      </form>
                    <div class="col-10 col-lg-7">
                      <p class="text-center lh-lg mb-0">We’ll never share your details with third parties. View our Privacy Policy for more info.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </section> 
        </div>
    </div>

    <!-- ===============================================--><!--    JavaScripts--><!-- ===============================================-->
    <script src="{{ asset('rer') }}/vendors/popper/popper.min.js"></script>
    <script src="{{ asset('rer') }}/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('rer') }}/vendors/is/is.min.js"></script>
    <script src="{{ asset('rer') }}/vendors/countup/countUp.umd.js"></script>
    <script src="{{ asset('rer') }}/vendors/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('rer') }}/vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('rer') }}/assets/js/theme.js"></script>
  </body>

</html>