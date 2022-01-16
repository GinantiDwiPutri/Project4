<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>ginaLodge</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ url('public') }}/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Baloo+Chettan|Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ url('public') }}/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ url('public') }}/css/responsive.css" rel="stylesheet" />
</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <img src="{{ url('public') }}/images/logo.png" alt="">
            <span>
              ginaLodge
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/about"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/jewellery">Jewellery </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/contact">Contact us</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="login">Login</a>
                </li>
              </ul>

            </div>
            <div class="quote_btn-container ">
              <a href="">
                <img src="{{ url('public') }}/images/cart.png" alt="">
                <div class="cart_number">
                  0
                </div>
              </a>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div class="design-box">
        <img src="{{ url('public') }}/images/design-1.png" alt="">
      </div>
      <div class="slider_number-container d-none d-md-block">
        <div class="number-box">
          <span>
            01
          </span>
          <hr>
          <span class="jwel">
            J <br>
            e <br>
            w <br>
            e <br>
            l <br>
            l <br>
            e <br>
            r <br>
            y
          </span>
          <hr>
          <span>
            02
          </span>
        </div>
      </div>
      <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> Koleksi Terbaru</span>
                      <hr>
                    </h2>
                    <h1>
                      TOKO KAMI
                    </h1>
                    <p>
                      Silahkan untuk melihat toko kami apakah barang yang sedang anda perlukan ada ditoko kami toko kami banyak menyedikan perhiasan berlian yang sangat cantik dan mewah tentunya sangat sesuai dipakai untuk keacara penting pastinya.
                    </p>
                    <div>
                      <a href="">Berbelanja sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ url('public') }}/images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> Koleksi Terbaru</span>
                      <hr>
                    </h2>
                    <h1>
                      TOKO KAMI
                    </h1>
                    <p>
                      Silahkan untuk melihat toko kami apakah barang yang sedang anda perlukan ada ditoko kami toko kami banyak menyedikan perhiasan berlian yang sangat cantik dan mewah tentunya sangat sesuai dipakai untuk keacara penting pastinya.
                    </p>
                    <div>
                      <a href="">Berbelanja Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ url('public') }}/images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail_box">
                    <h2>
                      <span> Koleksi Terbaru</span>
                      <hr>
                    </h2>
                    <h1>
                      TOKO KAMI
                    </h1>
                    <p>
                      Silahkan untuk melihat toko kami apakah barang yang sedang anda perlukan ada ditoko kami toko kami banyak menyedikan perhiasan berlian yang sangat cantik dan mewah tentunya sangat sesuai dipakai untuk keacara penting pastinya.
                    </p>
                    <div>
                      <a href="">Berbelanja Sekarang</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ url('public') }}/images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- item section -->

  <div class="item_section layout_padding2">
    <div class="container">
      <div class="item_container">
        <div class="box">
          <div class="price">
            <h6>
              Harga Terbaik
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ url('public') }}/images/i-1.png" alt="">
          </div>
          <div class="name">
            <h5>
              Gelang
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Harga Terbaik
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ url('public') }}/images/i-2.png" alt="">
          </div>
          <div class="name">
            <h5>
              Cincin
            </h5>
          </div>
        </div>
        <div class="box">
          <div class="price">
            <h6>
              Harga Terbaik
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ url('public') }}/images/i-3.png" alt="">
          </div>
          <div class="name">
            <h5>
              Anting Anting
            </h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- end item section -->

  <!-- about section -->

  <section class="about_section layout_padding2-top layout_padding-bottom">
    <div class="design-box">
      <img src="{{ url('public') }}/images/design-2.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Toko Perhiasan Kami
              </h2>
            </div>
            <p>
              Toko kami meyediakan berbagai perhiasan berlian seperti Gelang,Cincin Dan juga Anting-Anting yang sangat cantik dan mempunyai harga yang sesuai dengan kemampuan anda dan ditoko kami juga menyediakan cincin untuk pernikahan sehingga memudahkan anda dalam mencari cincin yang sesuai untuk pernikahan anda.
            </p>
            <div>
              <a href="">
                Baca selengkapnya
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ url('public') }}/images/about-img.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Harga Perhiasan Kami
        </h2>
      </div>
      <div class="price_container">
        <div class="box">
          <div class="name">
            <h6>
              Gelang Berlian
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ url('public') }}/images/i-1.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              <span>10.000.000</span>
            </h5>
            <a href="">
              Beli Sekarang
            </a>
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>
              Cincin Berlian
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ url('public') }}/images/i-2.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              <span>7.000.000</span>
            </h5>
            <a href="">
              Beli Sekarang
            </a>
          </div>
        </div>
        <div class="box">
          <div class="name">
            <h6>
              Anting Anting Diamond
            </h6>
          </div>
          <div class="img-box">
            <img src="{{ url('public') }}/images/i-3.png" alt="">
          </div>
          <div class="detail-box">
            <h5>
              <span>5000.000</span>
            </h5>
            <a href="">
              Beli Sekarang
            </a>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="price_btn">
          Lihat Selengkapnya
        </a>
      </div>
    </div>
  </section>

  <!-- end price section -->

  <!-- ring section -->

  <section class="ring_section layout_padding">
    <div class="design-box">
      <img src="{{ url('public') }}/images/design-1.png" alt="">
    </div>
    <div class="container">
      <div class="ring_container layout_padding2">
        <div class="row">
          <div class="col-md-5">
            <div class="detail-box">
              <h4>
                spesial
              </h4>
              <h2>
                Cincin kawin
              </h2>
              <a href="">
                Beli Sekarang
              </a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="img-box">
              <img src="{{ url('public') }}/images/ring-img.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end ring section -->

  <!-- client section -->

  <section class="client_section">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimoni
        </h2>
      </div>
      <h4 class="secondary_heading">
        Apa yang Pelanggan Kami Katakan?
      </h4>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                </div>
                <div class="name">
                  <h5>
                    Desi Ruspita
                  </h5>
                  <h6>
                    Untuk Ginalodge
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Barangnya Sangat sesuai dengan yang didinginkan sangat cantik dan juga mewah dan memiliki harga yang terjangkau bagi para penyuka barang berlian.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                </div>
                <div class="name">
                  <h5>
                    Reva Saputri
                  </h5>
                  <h6>
                    Untuk Ginalodge
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  memiliki kemasan dan design yang sangat baik dan respon penjual juga sangat baik dan juga cepat dalam proses pengiriman barang dan dalam merespon para pembeli.
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="client_container">
              <div class="client-id">
                <div class="img-box">
                </div>
                <div class="name">
                  <h5>
                    Siska Riani
                  </h5>
                  <h6>
                    Untuk Ginalodge
                  </h6>
                </div>
              </div>
              <div class="detail-box">
                <p>
                  Kualitas produk sangat bagus dan Barangnya sesuai dengan yang saya inginkan dan perlukan.
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Sebelumnya</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Selanjutnya</span>
        </a>
      </div>

    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="design-box">
      <img src="{{ url('public') }}/images/design-2.png" alt="">
    </div>
    <div class="container ">
      <div class="">
        <h2 class="">
          Hubungi kami
        </h2>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" placeholder="Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                MENGIRIM
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map-responsive">
              <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="row">
          <div class="col-md-3">
            <div class="info_logo">
              <a href="">
                <img src="{{ url('public') }}/images/logo.png" alt="">
                <span>
                  ginaLodge
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="{{ url('public') }}/images/location.png" alt="">
                <span>
                  Alamat
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="{{ url('public') }}/images/phone.png" alt="">
                <span>
                  08976546344
                </span>
              </a>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <a href="">
                <img src="{{ url('public') }}/images/mail.png" alt="">
                <span>
                  gina@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="info_form">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Newsletter
            </h5>
          </div>
          <form action="">
            <div class="email_box">
              <label for="email2">Enter Your Email</label>
              <input type="text" id="email2">
            </div>
            <div>
              <button>
                subscribe
              </button>
            </div>
          </form>
        </div>
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h5 class="info_heading">
              Follow Us
            </h5>
          </div>
          <div class="social_box">
            <a href="">
            <img src="{{ url('public') }}/{{ url('public') }}/images/fb.png" alt="">
            </a>
            <a href="">
            <img src="{{ url('public') }}/{{ url('public') }}/images/twitter.png" alt="">
            </a>
            <a href="">
            <img src="{{ url('public') }}/images/linkedin.png" alt="">
            </a>
            <a href="">
            <img src="{{ url('public') }}/images/insta.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="{{ url('public') }}/js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="{{ url('public') }}/js/bootstrap.js"></script>
  <script type="text/javascript" src="{{ url('public') }}/js/custom.js"></script>
</body>

</html>