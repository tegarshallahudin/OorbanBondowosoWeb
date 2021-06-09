<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Oorban Bondowoso</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/public/assets/img/favicons/logo.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/public/assets/img/favicons/logo.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/public/assets/img/favicons/logo.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/public/assets/img/favicons/logo.png') }}">
    <link rel="manifest" href="{{ asset('frontend/public/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('frontend/public/assets/img/favicons/logo.png') }}">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('frontend/public/assets/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block navbar-klean" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.html"> <img class="me-3 d-inline-block" src="{{ asset('frontend/public/assets/img/gallery/logo3.png') }}" alt="" /></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="#home">Beranda</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#service">Aplikasi</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#team">Tentang Kami</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="#contact">Kontak</a></li>
            </ul>
            <form class="ps-lg-5">
              <button class="btn btn-link text-primary fw-bold order-1 order-lg-0" type="button">Masuk</button>
              <button class="btn btn-light shadow-klean order-0" type="submit"><span class="text-gradient fw-bold">Mendaftar</span></button>
            </form>
          </div>
        </div>
      </nav>
      <section id="home">
        <div class="bg-holder d-none d-md-block bg-size" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/ilus.png') }});background-position:right bottom;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/heroheader-bg.png') }});background-position:center;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7 col-lg-6 py-6 text-sm-start text-center">
              <h1 class="fw-bold display-4 fs-4 fs-lg-6 fs-xxl-7 text-gradient"> Ayo Bergabung</h1>
              <h1 class="text-700">Cari Property <span class="fw-bold">Idaman Anda Disini</span></h1>
              <p class="mb-5 fs-0">We’ve spent the last 7 years helping over <span class="fw-bold text-primary">1 million people </span><br />Replenish seasons may male hath fruit beast were seas saw you arrie said man beast whales his void unto last session for bite. </p><a class="btn hover-top btn-glow btn-klean" href="#">Selengkapnya</a>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-lg-0 pt-md-8 py-0">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between py-5 border-klean">
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="{{ asset('frontend/public/assets/img/gallery/google.png') }}" height="40" alt="brands" /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="{{ asset('frontend/public/assets/img/gallery/netflix.png') }}" height="40" alt="brands" /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="{{ asset('frontend/public/assets/img/gallery/microsoft.png') }}" height="40" alt="brands" /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="{{ asset('frontend/public/assets/img/gallery/theme-wagon.png') }}" height="40" alt="brands" /></div>
            <div class="col-auto col-md-4 col-lg-auto my-3 text-xl-start"><img src="{{ asset('frontend/public/assets/img/gallery/mailbluster.png') }}" height="40" alt="brands" /></div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="service">
        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center py-7">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Perbaikan</h5>
              <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
            </div>
          </div>
          <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/service.png') }});background-position:bottom center;background-size:contain;">
          </div>
          <!--/.bg-holder-->

          <div class="row flex-center circle-blend circle-blend-right circle-warning">
            <div class="col-xl-9">
              <div class="row justify-content-center circle">
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/text.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">Send Texts Instantly</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Manage costs, build forecasts, and adapt quickly as demand and budgets change.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/organized.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">University Admissions</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Modern tools, certified HR advisors, and expert guides to help you stay compliant.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-4">
                  <div class="card card-bg h-100 px-4 px-md-2 px-lg-3 px-xxl-4 pt-4">
                    <div class="text-center"><img class="my-5" src="{{ asset('frontend/public/assets/img/icons/statistics.png') }}" width="100" alt="services" />
                      <div class="card-body text-center text-md-start">
                        <h6 class="fw-bold fs-1">Visa Consultancy</h6>
                        <p class="mt-3 mb-md-0 mb-lg-3">Get your team in sync with messages, real-time alerts, reminders, and more.</p><a class="btn btn-lg ps-0 pe-3 text-primary" href="#" role="button">Learn more
                          <svg class="bi bi-arrow-right-short" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="feature">
      <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/bgvek.png') }});background-position:center;background-size:contain;">
        </div>
        <div class="container">
          <div class="bg-holder" style="background-image:url({{ asset('fronetend/public/assets/img/illustrations/feature-bg.png') }});background-position:right;background-size:auto;">
          </div>
          <!--/.bg-holder-->

          <div class="row justify-content-center mb-6">
            <div class="col-lg-6 text-center mx-auto mb-3 mb-md-5 mt-4">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Fitur-fitur</h5>
              <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by ThemeWagon</p>
            </div>
          </div>
          <div class="row circle-blend circle-blend-right circle-cyan">
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-danger">
                  <div class="icon icon-danger"><span data-feather="mail"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Encrypted Mail</h5>
                <p class="mb-md-0 px-xxl-6">Bits of moving fluff encyclopaedia galactica are creatures</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-primary">
                  <div class="icon icon-primary"><span data-feather="monitor"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Screen Sharing</h5>
                <p class="mb-md-0 px-xxl-6">Finite but unbounded quasar a mote of dust suspended</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-warning">
                  <div class="icon icon-warning"><span data-feather="book"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Personal Logbook</h5>
                <p class="mb-md-0 px-xxl-6">Paroxysm of global death kindling the energy hidden in matter</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-success">
                  <div class="icon icon-success"><span data-feather="tablet"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">App Support</h5>
                <p class="mb-md-0 px-xxl-6">Extraordinary claims require extraordinary evidence emerged</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-secondary">
                  <div class="icon icon-secondary"><span data-feather="printer"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Multiple Printing</h5>
                <p class="mb-md-0 px-xxl-6">Kindling the energy hidden in matter stirred by starlight</p>
              </div>
            </div>
            <div class="col-md-4 mb-6">
              <div class="text-center px-lg-3">
                <div class="icon-wrapper shadow-info">
                  <div class="icon icon-info"><span data-feather="edit-2"></span></div>
                </div>
                <h5 class="mt-3 fw-bold">Free Sketch</h5>
                <p class="mb-md-0 px-xxl-6">Hypatia brain is the seed of intelligence citizens of distant epochs dream</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="circle-blend circle-blend-left circle-primary">
        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/product-bg-1.png') }});background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder mt-n4" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/product-bg-2.png') }});background-position:left top;background-size:contain;">
        </div>
        <!--/.bg-holder-->

        <div class="container-xl">
          <div class="row flex-center">
            <div class="col-auto">
              <div class="card product-card-bg square shadow-square-bottom">
                <div class="card-body p-4"><img class="img-fluid border-img" src="{{ asset('frontend/public/assets/img/gallery/product.png') }}" width="350" alt="..." /></div>
              </div>
            </div>
            <div class="col-lg-6 ms-lg-auto my-7 my-lg-0 px-sm-8 px-lg-0 ps-lg-2 ps-xl-0">
              <h1 class="fw-bold display-5 lh-sm my-4">Setiap Produk <br> Kami Buat dengan Design Terbaik Kami</h1>
              <p class="fs-1 mb-3 pe-xxl-8">I cant do that as Bruce Wayne... as a man.Im flesh and blood. I can be ignored, destroyed. But as a symbol, I can be incorruptible, I can be everlasting.</p>
              <p class="fs-1 mb-5 pe-xxl-8"> Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
              <button class="btn btn-lg btn-klean-outline order-0" type="submit"><span class="text-gradient fw-bold">Baca Lagi</span></button>
            </div>
          </div>
          <div class="row flex-center pt-10 pt-md-6 pt-lg-10 circle-blend circle-primary">
            <div class="col-auto ms-lg-auto order-md-1 text-center circle-blend circle-blend-right circle-danger">
              <div class="card product-card-bg square shadow-square-top">
                <div class="card-body p-4"><img class="img-fluid border-img" src="{{ asset('frontend/public/assets/img/gallery/dedicate.png') }}" width="350" alt="..." /></div>
              </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-0 ms-xl-auto my-7 my-lg-0 px-sm-8 px-lg-0 me-lg-auto ps-xl-0">
              <h1 class="fw-bold display-5 lh-sm my-4">Konsep yang Matang<br> dan Kerja sama Tim yang Baik</h1>
              <p class="fs-1 mb-3 pe-xxl-8">Bruce Wayne, eccentric billionaire. It was a dog. It was a big dog. Bats frighten me. Its time my enemies shared my dread. No guns, no killing. Its ends here. It was a dog. It was a big dog.</p>
              <p class="fs-1 mb-5 pe-xxl-8"> Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
              <button class="btn btn-lg btn-klean-outline order-0" type="submit"><span class="text-gradient fw-bold">Baca Lagi</span></button>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0">

        <div class="container">
          <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/project-bg.png') }});background-position:right;background-size:auto;">
          </div>
          <!--/.bg-holder-->

          <div class="row justify-content-center">
            <div class="col-lg-6 text-center mx-auto mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Projek Kami</h5>
              <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
            </div>
            <div class="col-xxl-9">
              <div class="card project-card-bg mx-auto px-0">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-12 col-md-6 col-lg-4 text-center"><img class="mb-3 mb-lg-3 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-1.png') }}" width="320" alt="project" /><img class="mb-3 mb-lg-0 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-2.png') }}" width="320" alt="project" /></div>
                    <div class="col-12 col-md-6 col-lg-4 text-center"><img class="mb-3 mb-lg-3 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-3.png') }}" width="320" alt="project" /><img class="mb-3 mb-lg-0 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-4.png') }}" width="320" alt="project" /></div>
                    <div class="col-12 col-md-6 col-lg-4 text-center"><img class="mb-3 mb-lg-3 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-5.png') }}" width="320" alt="project" /><img class="mb-3 mb-lg-0 img-fluid px-xl-0" src="{{ asset('frontend/public/assets/img/gallery/project-6.png') }}" width="320" alt="project" /></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-auto mx-auto mt-6">
              <button class="btn btn-lg btn-klean-outline order-0" type="submit"><span class="text-gradient fw-bold">Selengkapnya  </span></button>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pb-0" id="team" >

        <div class="container">
          <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/team-bg.png);background-position:left top;background-size:auto;') }}">
          </div>
          <!--/.bg-holder-->

          <div class="row justify-content-center mb-6 circle-blend circle-warning">
            <div class="col-lg-6 text-center mx-auto mb-7">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Tim Kami</h5>
              <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
            </div>
            <div class="col-xxl-9">
              <div class="row flex-center g-0">
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-right"><img class="team-card-1" src="{{ asset('frontend/public/assets/img/gallery/john.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Tegar Shallahudin Al Ayubi</h5>
                  <p>WEB Developer</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-left"><img class="team-card-2" src="{{ asset('frontend/public/assets/img/gallery/carrey.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Iphang Rere Admaja</h5>
                  <p>Android Developer</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-right"><img class="team-card-3" src="{{ asset('frontend/public/assets/img/gallery/ray.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Anisa Puji</h5>
                  <p>Admin</p>
                </div>
                <div class="col-sm-6 col-lg-3 text-center">
                  <div class="wrapper shadow-square-left"><img class="team-card-4" src="{{ asset('frontend/public/assets/img/gallery/austin.png') }}" width="200" alt="..." /></div>
                  <h5 class="fw-bold mt-3 mb-1">Derby Senja Venora</h5>
                  <p>Designer</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-auto mx-auto mb-8">
              <button class="btn btn-lg btn-klean-outline order-0" type="submit"><span class="text-gradient fw-bold">Selengkapnya        </span></button>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5" id="testimonial">
        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/testimonial-bg-1.png);background-position:center;background-size:cover;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/testimonial-bg.png);background-position:right top;background-size:auto;margin-top:-43px;margin-left:-200px;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="container-xxl">
          <div class="row">
            <div class="col-lg-7 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Apa Kata Mereka ?</h5>
              <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
            </div>
          </div>
          <div class="row flex-center h-100 circle-blend circle-blend-left circle-pink" style="z-index:1;">
            <div class="col-xl-11 circle-blend circle-blend-right circle-cyan">
              <div class="carousel slide" id="carouselTestimonials" data-bs-ride="carousel">
                <div class="carousel-inner ps-sm-7 pb-sm-7 ps-md-5 ps-lg-7 pb-lg-7">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="row h-100 align-items-center">
                      <div class="col-auto">
                        <div class="wrapper shadow-square-left-bottom">
                          <div class="card testimonial-card-bg h-100">
                            <div class="card-body h-100 p-4"><img class="border-klean-gradient" src="{{ asset('frontend/public/assets/img/gallery/testimonial.png') }}" alt="testimonials" width="315" /></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 col-lg-6 col-xl-7 mb-4 ms-xxl-auto"><img class="img-fluid" src="{{ asset('frontend/public/assets/img/gallery/quotation.png') }}" alt="testimonials-bg" />
                        <h5 class="fw-bold text-gradient fs-4 mt-4">Excellent !</h5>
                        <p class="mt-4">I am completely blown away. Thanks guys, keep up the good work! I just cant get enough of Deva App. I want to get a T-Shirt witheva App on it so I can show it off to everyone.</p>
                        <div class="my-4">
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </div>
                        <h6 class="fw-bold fs-lg-1">Daniel Lane,<span class="ms-2 fw-normal text-400 fs--1">Developer</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="5000">
                    <div class="row h-100 align-items-center">
                      <div class="col-auto">
                        <div class="wrapper shadow-square-left-bottom">
                          <div class="card testimonial-card-bg h-100">
                            <div class="card-body h-100 p-4"><img class="border-klean-gradient" src="{{ asset('frontend/public/assets/img/gallery/testimonial.png') }}" alt="testimonials" width="315" /></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 col-lg-6 col-xl-7 mb-4 ms-xxl-auto"><img class="img-fluid" src="{{ asset('frontend/public/assets/img/gallery/quotation.png') }}" alt="testimonials-bg" />
                        <h5 class="fw-bold text-gradient fs-4 mt-4">Excellent !</h5>
                        <p class="mt-4">I am completely blown away. Thanks guys, keep up the good work! I just cant get enough of Deva App. I want to get a T-Shirt witheva App on it so I can show it off to everyone.</p>
                        <div class="my-4">
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </div>
                        <h6 class="fw-bold fs-lg-1">Ainara Vergara,<span class="ms-2 fw-normal text-400 fs--1">Designer</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="3000">
                    <div class="row h-100 align-items-center">
                      <div class="col-auto">
                        <div class="wrapper shadow-square-left-bottom">
                          <div class="card testimonial-card-bg h-100">
                            <div class="card-body h-100 p-4"><img class="border-klean-gradient" src="{{ asset('frontend/public/assets/img/gallery/testimonial.png') }}" alt="testimonials" width="315" /></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 col-lg-6 col-xl-7 mb-4 ms-xxl-auto"><img class="img-fluid" src="{{ asset('frontend/public/assets/img/gallery/quotation.png') }}" alt="testimonials-bg" />
                        <h5 class="fw-bold text-gradient fs-4 mt-4">Excellent !</h5>
                        <p class="mt-4">I am completely blown away. Thanks guys, keep up the good work! I just cant get enough of Deva App. I want to get a T-Shirt witheva App on it so I can show it off to everyone.</p>
                        <div class="my-4">
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </div>
                        <h6 class="fw-bold fs-lg-1">Niek Bove,<span class="ms-2 fw-normal text-400 fs--1">Senior Developer</span></h6>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row h-100 align-items-center">
                      <div class="col-auto">
                        <div class="wrapper shadow-square-left-bottom">
                          <div class="card testimonial-card-bg h-100">
                            <div class="card-body h-100 p-4"><img class="border-klean-gradient" src="{{ asset('frontend/public/assets/img/gallery/testimonial.png') }}" alt="testimonials" width="315" /></div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-5 col-lg-6 col-xl-7 mb-4 ms-xxl-auto"><img class="img-fluid" src="{{ asset('frontend/public/assets/img/gallery/quotation.png') }}" alt="testimonials-bg" />
                        <h5 class="fw-bold text-gradient fs-4 mt-4">Excellent !</h5>
                        <p class="mt-4">I am completely blown away. Thanks guys, keep up the good work! I just cant get enough of Deva App. I want to get a T-Shirt witheva App on it so I can show it off to everyone.</p>
                        <div class="my-4">
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                          <svg class="bi bi-star-fill me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#EFAB18" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                          </svg>
                        </div>
                        <h6 class="fw-bold fs-lg-1">Niek Bove,<span class="ms-2 fw-normal text-400 fs--1">Senior Developer</span></h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row flex-center">
                  <div class="col-auto position-relative z-index-2">
                    <ol class="carousel-indicators me-xxl-7 me-xl-4 me-lg-7">
                      <li class="active" data-bs-target="#carouselTestimonials" data-bs-slide-to="0"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="1"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="2"></li>
                      <li data-bs-target="#carouselTestimonials" data-bs-slide-to="3"></li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-5" id="blog">

        <div class="container container-md-fluid">
          <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/blog-bg.png);background-position:left top;background-size:auto;margin-top:-23px;') }}">
          </div>
          <!--/.bg-holder-->

          <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/blog-bg-1.png);background-position:right bottom;background-size:auto;margin-top:-66px;') }}">
          </div>
          <!--/.bg-holder-->

          <div class="row">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center mb-6">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-3">Postingan Artikel</h5>
              <p class="mb-0">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon</span></p>
            </div>
          </div>
          <div class="row flex-center h-100 circle-blend circle-blend-left circle-cyan">
            <div class="col-12">
              <div class="row align-items-center circle-blend circle-blend-right circle-warning">
                <div class="col-md-6 col-lg-4 mb-4 undefined">
                  <div class="card card-bg p-3 h-100">
                    <div class="card-body">
                      <h6 class="text-gradient fs--1 fw-bold">Article</h6>
                      <hr class="text-100" />
                      <h5 class="fw-bold lh-base fs-0 text-700">10 Features Of Tech That Make Everyone Love It</h5>
                      <div class="d-flex align-items-center"><img class="me-3 me-md-3" src="{{ asset('frontend/public/assets/img/gallery/author-1.png') }}" alt="blog" />
                        <div class="my-3 fs--1">
                          <p class="mb-0 fw-bold">Jessica Parker</p>
                          <p class="fw-normal mb-0">May, 2020 .<span>5 mins read</span></p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center mt-4 fs--1">
                        <svg class="bi bi-hand-thumbs-up me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                        </svg><span class="me-4">34</span>
                        <svg class="bi bi-eye me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                        </svg><span>203</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 circle-blend circle-blend-left circle-pink">
                  <div class="card card-bg p-3 h-100">
                    <div class="card-body">
                      <h6 class="text-gradient fs--1 fw-bold">lifestyle</h6>
                      <hr class="text-100" />
                      <h5 class="fw-bold lh-base fs-0 text-700">Simple Guidance For You In Your Morning Wakeup</h5>
                      <div class="d-flex align-items-center"><img class="me-3 me-md-3" src="{{ asset('frontend/public/assets/img/gallery/author-2.png') }}" alt="blog" />
                        <div class="my-3 fs--1">
                          <p class="mb-0 fw-bold">Jason Bourne</p>
                          <p class="fw-normal mb-0">May, 2020 .<span>10 mins read</span></p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center mt-4 fs--1">
                        <svg class="bi bi-hand-thumbs-up me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                        </svg><span class="me-4">39</span>
                        <svg class="bi bi-eye me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                        </svg><span>604</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 undefined">
                  <div class="card card-bg p-3 h-100">
                    <div class="card-body">
                      <h6 class="text-gradient fs--1 fw-bold">CEO/office</h6>
                      <hr class="text-100" />
                      <h5 class="fw-bold lh-base fs-0 text-700">Eliminate Your Fears And Doubts About Management.</h5>
                      <div class="d-flex align-items-center"><img class="me-3 me-md-3" src="{{ asset('frontend/public/assets/img/gallery/author-3.png') }}" alt="blog" />
                        <div class="my-3 fs--1">
                          <p class="mb-0 fw-bold">Wanda Maximoff</p>
                          <p class="fw-normal mb-0">May, 2020 .<span>7 mins read</span></p>
                        </div>
                      </div>
                      <div class="d-flex align-items-center mt-4 fs--1">
                        <svg class="bi bi-hand-thumbs-up me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M8.864.046C7.908-.193 7.02.53 6.956 1.466c-.072 1.051-.23 2.016-.428 2.59-.125.36-.479 1.013-1.04 1.639-.557.623-1.282 1.178-2.131 1.41C2.685 7.288 2 7.87 2 8.72v4.001c0 .845.682 1.464 1.448 1.545 1.07.114 1.564.415 2.068.723l.048.03c.272.165.578.348.97.484.397.136.861.217 1.466.217h3.5c.937 0 1.599-.477 1.934-1.064a1.86 1.86 0 0 0 .254-.912c0-.152-.023-.312-.077-.464.201-.263.38-.578.488-.901.11-.33.172-.762.004-1.149.069-.13.12-.269.159-.403.077-.27.113-.568.113-.857 0-.288-.036-.585-.113-.856a2.144 2.144 0 0 0-.138-.362 1.9 1.9 0 0 0 .234-1.734c-.206-.592-.682-1.1-1.2-1.272-.847-.282-1.803-.276-2.516-.211a9.84 9.84 0 0 0-.443.05 9.365 9.365 0 0 0-.062-4.509A1.38 1.38 0 0 0 9.125.111L8.864.046zM11.5 14.721H8c-.51 0-.863-.069-1.14-.164-.281-.097-.506-.228-.776-.393l-.04-.024c-.555-.339-1.198-.731-2.49-.868-.333-.036-.554-.29-.554-.55V8.72c0-.254.226-.543.62-.65 1.095-.3 1.977-.996 2.614-1.708.635-.71 1.064-1.475 1.238-1.978.243-.7.407-1.768.482-2.85.025-.362.36-.594.667-.518l.262.066c.16.04.258.143.288.255a8.34 8.34 0 0 1-.145 4.725.5.5 0 0 0 .595.644l.003-.001.014-.003.058-.014a8.908 8.908 0 0 1 1.036-.157c.663-.06 1.457-.054 2.11.164.175.058.45.3.57.65.107.308.087.67-.266 1.022l-.353.353.353.354c.043.043.105.141.154.315.048.167.075.37.075.581 0 .212-.027.414-.075.582-.05.174-.111.272-.154.315l-.353.353.353.354c.047.047.109.177.005.488a2.224 2.224 0 0 1-.505.805l-.353.353.353.354c.006.005.041.05.041.17a.866.866 0 0 1-.121.416c-.165.288-.503.56-1.066.56z"></path>
                        </svg><span class="me-4">26</span>
                        <svg class="bi bi-eye me-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"></path>
                          <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"></path>
                        </svg><span>436</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-auto mx-auto my-5">
                  <button class="btn btn-lg btn-klean-outline order-0 fs-0" type="submit"> <span class="text-gradient fw-bold">Lihat Semua</span></button>
                </div>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" id="contact">

        <div class="container">
          <div class="row">
            <div class="col-lg-7 col-xxl-5 mx-auto text-center mt-5">
              <h5 class="fw-bold fs-3 fs-lg-5 lh-sm mb-5">Kontak</h5>
            </div>
          </div>
        </div><!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->


      <section class="py-5 mb-8">
        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/contact-us-bg.png);background-position:left bottom;background-size:auto;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/gallery/contact-bg.png);background-position:center right ;background-size:contain;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-lg-5 mb-5">
              <div class="card card-bg p-2">
                <div class="card-body">
                  <form>
                    <div class="row mb-3 input-group-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="inputName">Name</label>
                      <div class="col-sm-12">
                        <input class="form-control rounded-pill border-white input-box" id="inputName" type="text" placeholder="Masukkan Nama" />
                        <svg class="bi bi-person-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row mb-3 input-group-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="inputEmail3">Email</label>
                      <div class="col-sm-12">
                        <input class="form-control rounded-pill border-white input-box" id="inputEmail3" type="email" placeholder="Masukkan Email" />
                        <svg class="bi bi-envelope-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row mb-3 input-group-text-icon">
                      <label class="col-sm-2 col-form-label visually-hidden" for="floatingTextarea2">Comments</label>
                      <div class="col-sm-12">
                        <textarea class="form-control rounded-3 border-white input-box" id="floatingTextarea2" placeholder="Masukkan Pesan dan Kesan" style="height: 150px"></textarea>
                        <svg class="bi bi-pencil-fill input-box-text-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                          <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"></path>
                        </svg>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="d-grid">
                          <button class="btn hover-top btn-glow btn-klean rounded-pill" type="submit">Kirim </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-5 offset-lg-1">
              <div class="d-flex align-items-center mb-5">
                <div class="icon icon-primary"><span data-feather="phone"></span></div>
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">No Telepon </p>
                  <p>081232877232</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-5">
                <div class="icon icon-primary"><span data-feather="mail"></span></div>
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">Email</p>
                  <p>OorbanBondowoso@gmail.com </p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="icon icon-primary"><span data-feather="map-pin"></span></div>
                <div class="flex-1 ms-3">
                  <p class="fw-bold mb-0">Lokasi</p>
                  <p>BLOG H-14,<br />Perum PBI, Nangkaan, <br />Bondowoso</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/cta-bg.png);background-position:center;background-size:cover;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/cta-bg-1.png);background-position:right top;background-size:auto;margin-top:-38px;margin-left:-200px;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row flex-center">
            <div class="col-xxl-9 py-5 text-center">
              <h1 class="fw-bold mb-4 text-gradient fs-6">Dapatkan Aplikasi Oorban Bondowoso</h1>
              <p class="mb-6 mx-xxl-11">Klean is an elegant HTML5 template and a perfect starting point for your next SaaS oriented site, carefully curated by <span class="fw-bold">ThemeWagon  </span></p><a class="btn hover-top btn-glow btn-klean rounded-pill" href="#">Download Disini</a>
            </div>
          </div>
        </div>
      </section>
      <section class="pb-0 pt-6 circle-blend circle-blend-left circle-warning">
        <div class="bg-holder" style="background-image:url({{ asset('frontend/public/assets/img/illustrations/footer-bg.png);background-position:center;background-size:cover;') }}">
        </div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row justify-content-lg-between circle-blend-right circle-danger">
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h5 class="text-600 mb-3 fw-bold">About</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Prices</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">About</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Resources</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Team</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Blog</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h5 class="text-600 mb-3 fw-bold">Resources </h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Terms</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Help</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Privacy</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h5 class="text-600 mb-3 fw-bold">Team</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Developer</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Designer</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-auto mb-3">
              <h5 class="text-600 mb-3 fw-bold">Blog</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">CEO</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Lifestyle</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Article</a></li>
                <li class="mb-2"><a class="text-400 text-decoration-none" href="#!">Tech</a></li>
              </ul>
            </div>
            <div class="col-9 col-sm-6 col-lg-auto mb-3">
              <h5 class="text-600 mb-3 fw-bold">Follow Us</h5>
              <ul class="list-unstyled list-inline my-3">
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="{{ asset('frontend/public/assets/img/icons/facebook.svg') }}" alt="" width="25" /></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="{{ asset('frontend/public/assets/img/icons/twitter.svg') }}" alt="" width="25" /></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="{{ asset('frontend/public/assets/img/icons/linkdin.svg') }}" alt="" width="25" /></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"><img class="list-social-icon" src="{{ asset('frontend/public/assets/img/icons/youtube.svg') }}" alt="" width="25" /></a></li>
                <li class="list-inline-item"><a class="text-decoration-none" href="#!"></a></li>
              </ul>
              <p class="fw-semi-bold mt-4 mb-3">Subscribe untuk Mengikuti</p>
              <label class="col-sm-2 col-form-label visually-hidden" for="inputEmail2">Email</label>
              <div class="col-sm-12 input-group-icon">
                <input class="form-control rounded-pill border-white py-1 px-4" id="inputEmail2" type="email" placeholder="email" />
                <svg class="bi bi-envelope-fill input-box-icon" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 16 16" style="left:.8rem;">
                  <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"></path>
                </svg>
              </div>
            </div>
          </div>
          <hr class="text-100 mb-0" />
          <div class="row justify-content-md-between justify-content-evenly py-3">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold">All rights Reserved &copy; OorbanBondowoso, 2021</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end"> Made with&nbsp;
                <svg class="bi bi-suit-heart-fill" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#EB6453" viewBox="0 0 16 16">
                  <path d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"></path>
                </svg>&nbsp;by&nbsp;<a class="fw-bold text-500" href="https://themewagon.com/" target="_blank">ThemeWagon </a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/feather-icons/feather.min.js"></script>
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('frontend/public/assets/js/theme.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
  </body>

</html>