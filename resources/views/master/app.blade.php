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
    <!-- ===============================================--><!--    Main Content--><!-- ===============================================-->
    <main class="main" id="top">
      <div class="content">
        <nav class="navbar navbar-expand-md fixed-top" id="navbar" data-navbar-soft-on-scroll="data-navbar-soft-on-scroll">
          <div class="container-fluid px-0"><a href="/"><img class="navbar-brand w-75 d-md-none" src="{{ asset('rer') }}/assets/img/logos/logo.svg" alt="logo" /></a>
            <a class="navbar-brand fw-bold d-none d-md-block" href="/">Brainwave.io</a>
            {{-- <a class="btn btn-primary btn-sm ms-md-x1 mt-lg-0 order-md-1 ms-auto" 
                href="{{url('login')}}">Login
            </a> --}}
            {{-- <a class="btn btn-primary btn-sm ms-md-x1 mt-lg-0 order-md-1 ms-auto" 
            href="{{url('logout')}}">Logout
            </a> --}}
            <button class="navbar-toggler border-0 pe-0" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbar-content" 
                    aria-controls="navbar-content" 
                    aria-expanded="false" 
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-md-end" id="navbar-content" data-navbar-collapse="data-navbar-collapse">
              <ul class="navbar-nav gap-md-2 gap-lg-3 pt-x1 pb-1 pt-md-0 pb-md-0" data-navbar-nav="data-navbar-nav">
                
                <li class="nav-item"> <a class="nav-link lh-xl" href="#home">Home</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="#about">About us</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="#service">Support</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="{{route('mahasiswa.create')}}">Daftar</a></li>
                <li class="nav-item"> <a class="nav-link lh-xl" href="{{route('dashboard')}}">Dashboard</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div data-bs-target="#navbar" data-bs-spy="scroll" tabindex="0">
          <section class="hero-section overflow-hidden position-relative z-0 mb-4 mb-lg-0" id="home">
            <div class="hero-background">
              <div class="container">
                <div class="row gy-4 gy-md-8 pt-9 pt-lg-0">
                  <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="fs-2 fs-lg-1 text-white fw-bold mb-2 mb-lg-x1 lh-base mt-3 mt-lg-0">Daftarkan diri Menjadi <br><span class="text-nowrap">Mahasiswa</span></h1>
                    <p class="fs-8 text-white mb-3 mb-lg-4 lh-lg">With lots of unique blocks, you can easily build a page without coding. Build your next consultancy website within few minutes</p>
                    <div class="d-flex justify-content-center justify-content-lg-start"><a class="btn btn-primary btn-lg lh-xl mb-4 mb-md-5 mb-lg-7" href="#!">Explore more</a></div>
                  </div>
                  <div class="col-lg-6 position-lg-relative">
                    <div class="position-lg-absolute z-1 text-center"><img class="img-fluid chat-image" src="{{ asset('rer') }}/assets/img/Hero/Frame.webp" alt="" />
                      <div class="position-absolute dots d-none d-md-block"> <img class="img-fluid w-50 w-lg-75" src="{{ asset('rer') }}/assets/img/illustrations/Dots.webp" alt="" /></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute bottom-0 start-0 end-0 z-1"><img class="wave mb-md-n2" src="{{ asset('rer') }}/assets/img/illustrations/Wave.svg" alt="" />
              <div class="bg-white py-2 py-md-5"></div>
            </div>
          </section>
          <section class="container border-bottom mb-8 mb-lg-10">
            <div class="row pb-6 pb-lg-8 g-3 g-lg-8 px-3">
              <div class="col-12 col-md-4">
                <h2 class="fs-3 fw-bold lh-sm mb-2 text-center" data-countup='{"endValue":6,"prefix":"0"}'>0</h2>
                <h6 class="fs-8 fw-normal lh-lg mb-0 opacity-70 text-center">Offices are available on different countries</h6>
              </div>
              <div class="col-12 col-md-4">
                <h2 class="fs-3 fw-bold lh-sm mb-2 text-center" data-countup='{"endValue":238}'>0</h2>
                <h6 class="opacity-70 fs-8 fw-normal lh-lg mb-0 text-center">Seats are available right now with support</h6>
              </div>
              <div class="col-12 col-md-4">
                <h2 class="fs-3 fw-bold lh-sm mb-2 text-center" data-countup='{"endValue":1395,"autoIncreasing":true}'>0</h2>
                <h5 class="opacity-70 fs-8 fw-normal lh-lg mb-0 text-center">People are using our co-work spaces right now</h5>
              </div>
            </div>
          </section>
          <section class="container mb-8 mb-lg-13" id="about">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6 col-xl-7"><img class="img-fluid" src="{{ asset('rer') }}/assets/img/Hero/Team.webp" alt="" /></div>
              <div class="col-12 col-lg-6 col-xl-5">
                <div class="row justify-content-center justify-content-lg-start">
                  <div class="col-sm-10 col-md-8 col-lg-12">
                    <h2 class="fs-4 fs-lg-3 fw-bold mb-2 text-center text-lg-start">Berkolaborasi dengan teman satu tim</h2>
                    <p class="fs-8 mb-4 mb-lg-5 lh-lg text-center text-lg-start fw-normal">We share common trends and strategies for improving your rental income</p>
                  </div>
                  <div class="col-12">
                    <div class="mb-x1 mb-lg-3">
                      <h5 class="fs-8 fw-bold lh-lg mb-1">Membuat project</h5>
                      <p class="mb-0 lh-xl">menjadikan apllikasi yang berguna bagi masyarakat</p>
                    </div>
                    <div>
                      <h5 class="fs-8 fw-bold lh-lg mb-1"> mencegah adanya ke tidak nyamanan </h5>
                      <p class="lh-xl mb-0">Membuat aplikasi yang nyaman di pakai</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="container mb-8 mb-lg-13">
            <div class="row align-items-center">
              <div class="col-12 col-lg-6 col-xl-5 order-lg-1"><img class="img-fluid" src="{{ asset('rer') }}/assets/img/Hero/Collaborator.webp" alt="" /></div>
              <div class="col-12 col-lg-6 col-xl-7">
                <div class="row justify-content-center justify-content-lg-start">
                  <div class="col-sm-10 col-md-8 col-lg-11">
                    <h2 class="fs-4 fs-lg-3 fw-bold mb-2 text-center text-lg-start"> Kampus IT dengan mempelajari semua bahasa pemrograman </h2>
                    <p class="fs-8 mb-4 mb-lg-5 lh-lg text-center text-lg-start fw-normal">Bekerja dengan tim dengan baik </p>
                  </div>
                  <div class="col-12">
                    <div class="mb-x1 mb-lg-3">
                      <h5 class="fs-8 fw-bold lh-lg mb-1">Java</h5>  
                      <p class="b-0 lh-xl">mempelajari berbagai library dan framework java netbeans java script react js dan lain sebagainya</p>
                    </div>
                    <div>
                      <h5 class="fs-8 fw-bold lh-lg mb-1"> PHP </h5>
                      <p class="lh-xl mb-0">mempelajari berbagai dan framework dari seperti laravel brezee laravel UI dan lain sebagainya</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="container mb-8 mb-lg-11">
            <div class="row justify-content-center">
              <div class="col-md-8 col-lg-7">
                <h3 class="fs-4 fs-lg-3 fw-bold text-center mb-2 mb-lg-x1"> How does <span class="text-nowrap">it work?</span></h3>
                <p class="fs-8 mb-7 mb-lg-8 text-center lh-lg">You can use this as it is or tweak it as you seem necessary. you seem necessary.</p>
              </div>
              <div class="col-12">
                <div class="row g-sm-2 g-lg-3 align-items-center timeline">
                  <div class="col-12 col-lg-4 d-flex flex-row flex-lg-column justify-content-center gap-2 gap-sm-x1 gap-md-4 gap-lg-0">
                    <div class="timeline-step-1 w-25 w-lg-100 mb-4 mb-lg-5 mb-xl-6">
                      <div class="timeline-item d-flex justify-content-center">
                        <div class="timeline-icon bg-primary rounded-circle d-flex justify-content-center align-items-center"><span class="fs-6 fs-lg-5 fs-xl-4 text-white"> 1</span></div>
                      </div>
                    </div>
                    <div class="py-1 py-lg-0 px-lg-5 w-75 w-sm-50 w-lg-100 timeline-content">
                      <h6 class="fs-8 fw-bold text-lg-center lh-lg mb-2">Isi pendaftaran</h6>
                      <p class="text-lg-center lh-xl mb-0">mendaftarkan diri sebagai mahasiswa</p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 d-flex flex-row flex-lg-column justify-content-center gap-2 gap-sm-x1 gap-md-4 gap-lg-0">
                    <div class="timeline-step-2 w-25 w-lg-100 mb-4 mb-lg-5 mb-xl-6">
                      <div class="timeline-item d-flex justify-content-center">
                        <div class="timeline-icon bg-success rounded-circle d-flex justify-content-center align-items-center"><span class="fs-6 fs-lg-5 fs-xl-4 text-white"> 2</span></div>
                      </div>
                    </div>
                    <div class="py-1 py-lg-0 px-lg-5 w-75 w-sm-50 w-lg-100 timeline-content">
                      <h6 class="fs-8 fw-bold text-lg-center lh-lg mb-2">Bergabung dengan teman satu tim</h6>
                      <p class="text-lg-center lh-xl mb-0">memulai jalan menju ke suksesan</p>
                    </div>
                  </div>
                  <div class="col-12 col-lg-4 d-flex flex-row flex-lg-column justify-content-center gap-2 gap-sm-x1 gap-md-4 gap-lg-0">
                    <div class="timeline-step-3 position-relative z-1 overflow-hidden w-25 w-lg-100 mb-4 mb-lg-5 mb-xl-6">
                      <div class="timeline-item d-flex justify-content-center">
                        <div class="timeline-icon bg-info rounded-circle d-flex justify-content-center align-items-center"><span class="fs-6 fs-lg-5 fs-xl-4 text-white"> 3</span></div>
                      </div>
                    </div>
                    <div class="py-1 py-lg-0 px-lg-5 w-75 w-sm-50 w-lg-100 timeline-content">
                      <h6 class="fs-8 fw-bold text-lg-center lh-lg mb-2">Mengelola aplikasi</h6>
                      <p class="text-lg-center lh-xl mb-0">Memulai kehidupan dengan menjadi senior developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="experience position-relative overflow-hidden" id="service">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="position-relative z-1 text-center mb-8 mb-lg-9 video-player-paused" data-video-player-container="data-video-player-container"><video class="w-100 h-100 rounded-4" src="{{ asset('rer') }}/assets/video/Tech_video.mp4" poster="{{ asset('rer') }}/assets/img/Hero/experiences.webp" type="video/mp4" data-video-player="data-video-player"></video>
                    <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 rounded-4 bg-1100 object-cover" data-overlay="data-overlay"> </div><button class="btn play-button position-absolute justify-content-center align-items-center bg-white rounded-circle cursor-pointer" data-play-button="data-play-button"> <img class="play-icon w-25" src="{{ asset('rer') }}/assets/img/illustrations/play-solid.svg" alt="" data-play-icon="data-play-icon" /><img class="pause-icon w-25" src="{{ asset('rer') }}/assets/img/illustrations/pause-solid.svg" alt="" data-pause-icon="data-pause-icon" /></button>
                    <div class="position-absolute dots d-none d-sm-block"><img class="img-fluid w-100" src="{{ asset('rer') }}/assets/img/illustrations/Dots.webp" alt="" /></div>
                  </div>
                </div>
                <div class="col-md-8 col-lg-7">
                  <h2 class="fs-4 fs-lg-3 fw-bold text-center text-white mb-5 mb-lg-9 lh-sm">We made this app to solve your problems.</h2>
                </div>
                <div class="col-12">
                  <div class="row gy-4 g-md-3 pb-8 pb-lg-11 px-1">
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('rer') }}/assets/img/icons/roadmap.svg" alt="" />
                      <div>
                        <h5 class="fs-8 text-white lh-lg fw-bold">Unlimited Projects</h5>
                        <p class="text-white text-opacity-50 lh-xl mb-0">Manage multiple projects at once and for seamless business operation.</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('rer') }}/assets/img/icons/users-wm.svg" alt="" />
                      <div>
                        <h5 class="fs-8 text-white lh-lg fw-bold">Team Management</h5>
                        <p class="text-white text-opacity-50 lh-xl mb-0">Manage your cross-functional teams better than ever with our easily manageable app.</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('rer') }}/assets/img/icons/share-91.svg" alt="" />
                      <div>
                        <h5 class="fs-8 text-white lh-lg fw-bold">File Sharing</h5>
                        <p class="text-white text-opacity-50 lh-xl mb-0">Easily share files where necessary and keep them safe with enhanced security and protection.</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('rer') }}/assets/img/icons/video_meeting.svg" alt="" />
                      <div>
                        <h5 class="fs-8 text-white lh-lg fw-bold">Video Meeting</h5>
                        <p class="text-white text-opacity-50 lh-xl mb-0">Conduct video meetings and keep records for further use with its cloud storage.</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('rer') }}/assets/img/icons/opening-times.svg" alt="" />
                      <div>
                        <h5 class="fs-8 text-white lh-lg fw-bold">Time Tracking</h5>
                        <p class="text-white text-opacity-50 lh-xl mb-0">Track time to ensure meeting all the deadlines and never lag behind managing multiple projects.</p>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-start gap-2"><img src="{{ asset('rer') }}/assets/img/icons/card-favorite.svg" alt="" />
                      <div>
                        <h5 class="fs-8 text-white lh-lg fw-bold">Payment System</h5>
                        <p class="text-white text-opacity-50 lh-xl mb-0">With its easy payment system create invoices and get paid all at the same place.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="position-absolute top-0 start-0 end-0">
              <div class="bg-white py-3 py-md-9 py-xl-10"> </div><img class="wave" src="{{ asset('rer') }}/assets/img/illustrations/Wave_2.svg" alt="" />
            </div>
          </section>
        </div>
        <button class="btn scroll-to-top text-white rounded-circle d-flex justify-content-center align-items-center bg-primary" data-scroll-top="data-scroll-top"><span class="uil uil-angle-up"></span></button>
        <footer class="pt-7 pt-lg-8">
          <div class="container">
            <div class="row gy-4 g-md-3 border-bottom pb-8 pb-lg-9 justify-content-center">
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg ls-1">Company</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#about">About us</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#contact"> Contact us</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Careers</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Press</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg">Product</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Features</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Pricing</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> News</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Help desk</a></li>
                  <li class="mb-1"><a class="ls-1 lh-xl" href="#!"> Support</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3">
                <p class="mb-2 lh-lg"> Legal</p>
                <ul class="list-unstyled text-1100">
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!">Privacy</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Terms & Conditions</a></li>
                  <li class="mb-1"> <a class="ls-1 lh-xl" href="#!"> Return Policy</a></li>
                </ul>
              </div>
              <div class="col-6 col-md-3 d-md-flex flex-column align-items-md-end pe-md-0">
                <div>
                  <p class="mb-2 lh-lg"> Download Our App</p>
                  <div class="mb-1 mb-lg-2"> <a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"> <img class="img-fluid" src="{{ asset('rer') }}/assets/img/logos/App_Store.webp" alt="{{ asset('rer') }}/assets/img/logos/App_Store.webp" /></a></div><a class="border-0 p-0 bg-transparent cursor-pointer rounded-1" href="#!"> <img class="img-fluid" src="{{ asset('rer') }}/assets/img/logos/Play_Store.webp" alt="{{ asset('rer') }}/assets/img/logos/Play_Store.webp" /></a>
                </div>
              </div>
            </div>
            <div class="row gy-2 py-3 justify-content-center justify-content-md-between">
              <div class="col-auto ps-0">
                <p class="text-center text-md-start lh-xl text-1100"> © 2024 Copyright, All Right Reserved, Made by <a class="fw-semi-bold" href="https://themewagon.com/">ThemeWagon </a>❤️</p>
              </div>
              <div class="col-auto pe-0"><a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span class="uil uil-twitter"> </span></a><a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span class="uil uil-instagram"></span></a><a class="icons fs-8 me-3 me-md-0 ms-md-3 cursor-pointer" href="#!"><span class="uil uil-linkedin"> </span></a></div>
            </div>
          </div>
        </footer>
      </div>
    </main><!-- ===============================================--><!--    End of Main Content--><!-- ===============================================-->



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