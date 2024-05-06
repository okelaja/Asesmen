{{-- 
<section class="text-center py-0">
    <div class="bg-holder overlay overlay-2" style="background-image:url(../assets/img/header-5.jpg);"></div>
    <div class="container">
      <div class="row min-vh-100 align-items-center">
        <div class="col-md-8 col-lg-5 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
          <div class="mb-5" data-zanim-xs='{"delay":0,"duration":1}'><a href="../index.html"><img src="../assets/img/logo-light.png" alt="logo" /></a></div>
          <div class="card" data-zanim-xs='{"delay":0.1,"duration":1}'>
            <div class="card-body p-md-5">
              <h4 class="text-uppercase fs-0 fs-md-1">login with elixir</h4>
              <form class="text-start mt-4">
                <div class="row align-items-center">
                  <div class="col-12">
                    <div class="input-group">
                      <div class="input-group-text bg-100"><span class="far fa-user"></span></div><input class="form-control" type="text" placeholder="Email or username" aria-label="Text input with dropdown button" />
                    </div>
                  </div>
                  <div class="col-12 mt-2 mt-sm-4">
                    <div class="input-group">
                      <div class="input-group-text bg-100"><span class="fas fa-lock"></span></div><input class="form-control" type="Password" placeholder="Password" aria-label="Text input with dropdown button" />
                    </div>
                  </div>
                </div>
                <div class="row align-items-center mt-3">
                  <div class="col-6">
                    <div class="form-check"><input class="form-check-input" id="rememberMe" type="checkbox" value="" /><label class="form-check-label text-500" for="rememberMe">Remember Me</label></div>
                  </div>
                  <div class="col-6 mt-2 mt-sm-3"><button class="btn btn-primary w-100" type="submit">Login</button></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!DOCTYPE html>
  <html lang="en">
  
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dashboard - Mazer Admin Dashboard</title>
      <link rel="shortcut icon" href="{{ asset('dist') }}/assets/compiled/svg/favicon.svg" type="image/x-icon">
      <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAiCAYAAADRcLDBAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjMzIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iMzQiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSIzMyIKICAgdGlmZjpJbWFnZUxlbmd0aD0iMzQiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LjAiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LjAiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjItMDMtMzFUMTA6NTA6MjMrMDI6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC4xIgogICAgICBzdEV2dDp3aGVuPSIyMDIyLTAzLTMxVDEwOjUwOjIzKzAyOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz5V57uAAAABgmlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kc8rRFEUxz9maORHo1hYKC9hISNGTWwsRn4VFmOUX5uZZ36oeTOv954kW2WrKLHxa8FfwFZZK0WkZClrYoOe87ypmWTO7dzzud97z+nec8ETzaiaWd4NWtYyIiNhZWZ2TvE946WZSjqoj6mmPjE1HKWkfdxR5sSbgFOr9Ll/rXoxYapQVik8oOqGJTwqPL5i6Q5vCzeo6dii8KlwpyEXFL519LjLLw6nXP5y2IhGBsFTJ6ykijhexGra0ITl5bRqmWU1fx/nJTWJ7PSUxBbxJkwijBBGYYwhBgnRQ7/MIQIE6ZIVJfK7f/MnyUmuKrPOKgZLpEhj0SnqslRPSEyKnpCRYdXp/9++msneoFu9JgwVT7b91ga+LfjetO3PQ9v+PgLvI1xkC/m5A+h7F32zoLXug38dzi4LWnwHzjeg8UGPGbFfySvuSSbh9QRqZ6H+Gqrm3Z7l9zm+h+iafNUV7O5Bu5z3L/wAdthn7QIme0YAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAJTSURBVFiF7Zi9axRBGIefEw2IdxFBRQsLWUTBaywSK4ubdSGVIY1Y6HZql8ZKCGIqwX/AYLmCgVQKfiDn7jZeEQMWfsSAHAiKqPiB5mIgELWYOW5vzc3O7niHhT/YZvY37/swM/vOzJbIqVq9uQ04CYwCI8AhYAlYAB4Dc7HnrOSJWcoJcBS4ARzQ2F4BZ2LPmTeNuykHwEWgkQGAet9QfiMZjUSt3hwD7psGTWgs9pwH1hC1enMYeA7sKwDxBqjGnvNdZzKZjqmCAKh+U1kmEwi3IEBbIsugnY5avTkEtIAtFhBrQCX2nLVehqyRqFoCAAwBh3WGLAhbgCRIYYinwLolwLqKUwwi9pxV4KUlxKKKUwxC6ZElRCPLYAJxGfhSEOCz6m8HEXvOB2CyIMSk6m8HoXQTmMkJcA2YNTHm3congOvATo3tE3A29pxbpnFzQSiQPcB55IFmFNgFfEQeahaAGZMpsIJIAZWAHcDX2HN+2cT6r39GxmvC9aPNwH5gO1BOPFuBVWAZue0vA9+A12EgjPadnhCuH1WAE8ivYAQ4ohKaagV4gvxi5oG7YSA2vApsCOH60WngKrA3R9IsvQUuhIGY00K4flQG7gHH/mLytB4C42EgfrQb0mV7us8AAMeBS8mGNMR4nwHamtBB7B4QRNdaS0M8GxDEog7iyoAguvJ0QYSBuAOcAt71Kfl7wA8DcTvZ2KtOlJEr+ByyQtqqhTyHTIeB+ONeqi3brh+VgIN0fohUgWGggizZFTplu12yW8iy/YLOGWMpDMTPXnl+Az9vj2HERYqPAAAAAElFTkSuQmCC" type="image/png">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/compiled/css/app.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/compiled/css/app-dark.css">
    <link rel="stylesheet" href="{{ asset('dist') }}/assets/compiled/css/iconly.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js" integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://kit.fontawesome.com/c2dd979a9d.js" crossorigin="anonymous"></script>
  
  </head>
  <body>
    <section class="py-0 mt-5">
      <div class="bg-holder overlay overlay-2 ">
          <div class="container">
              <section id="multiple-column-form">
                  <div class="row match-height">
                      <div class="col-12">
                          <div class="card">
                              <div class="text-center card-header">
                                 <a href="{{url('/')}}"><h1 class="card-title">REGISTER</h1></a>
                              </div>
                              <div class="card-body">
                                  <form action="" class="form" method="POST">
                                      @csrf
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Email</label>
                                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror"
                                                        placeholder="Masukkan Email" name="email">
                                                    {{-- @error('email')
                                                        <p>{{$message}}</p>
                                                    @enderror --}}
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Name</label>
                                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror"
                                                        placeholder="Masukkan name" name="name">
                                                    {{-- @error('name')
                                                        <p>{{$message}}</p>
                                                    @enderror --}}
                                                </div>
                                            </div>                                            
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Password</label>
                                                    <input type="text" id="password" class="form-control @error('password') is-invalid @enderror"
                                                        placeholder="**********" name="password">
                                                    @error('password')
                                                        <p>{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Confirm Password</label>
                                                    <input type="text" id="conpass" class="form-control @error('conpass') is-invalid @enderror"
                                                        placeholder="**********" name="conpass">
                                                    @error('conpass')
                                                        <p>{{$message}}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-12">
                                              <div class='form-check'>
                                                  <div class="checkbox">
                                                      <input type="checkbox" id="checkbox5" class='form-check-input' checked>
                                                      <label for="checkbox5">Remember Me</label>
                                                  </div>
                                              </div>
                                              <p>Sudah punya akun?<a href="{{url('login')}}"> Login</a></p>
                                        </div>
                                         {{--  <div class="col-12 d-flex justify-content-end">
                                              <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                              <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                          </div> --}}
                                          <div class="col-md-12 d-flex justify-content-end">
                                              <button type="submit" class="btn btn-primary">Register</button>
                                          </div>
                                  </form>
                              </div>  
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </section>
  
    <script src="{{ asset('dist') }}/assets/static/js/components/dark.js"></script>
    <script src="{{ asset('dist') }}/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    
    
    <script src="{{ asset('dist') }}/assets/compiled/js/app.js"></script>
    
  
    
  <!-- Need: Apexcharts -->
  <script src="{{ asset('dist') }}/assets/extensions/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('dist') }}/assets/static/js/pages/dashboard.js"></script>
  
  </body>
  
  </html>