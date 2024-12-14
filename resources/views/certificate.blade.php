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

    <title>Portofolio Saya</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('asset-landing-page/css/bootstrap.css') }}" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('asset-landing-page/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('asset-landing-page/css/responsive.css') }}" rel="stylesheet" />
  </head>

  <body class="sub_page">
    <div class="hero_area">
      <!-- header section strats -->
      <header class="header_section">
        <div class="container">
          <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="/">
              <!-- logo icon -->
              <!-- <img src="images/logo.png" alt="" /> -->
              <!-- end logo icon -->
              <span> Portofolio </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="/"> Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about"> About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/skills"> Skills </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/project"> Project </a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="/certificate"> Certificate </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact"> Contact </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- end header section -->
    </div>

    <!-- certificate section -->

    <section class="blog_section layout_padding">
      <div class="container">
        <div class="heading_container">
          <h2>Certificate</h2>
          <!-- Logo -->
          <!-- <img src="images/plug.png" alt="" /> -->
          <!-- End Logo -->
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('asset-landing-page/images/Muhammad Rafa Auliaurahman Certificate Front End HTML-1.png') }}" alt="" />
              </div>
              <div class="detail-box">
                <h5>GreatLearning</h5>
                <p>FrontEnd</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('asset-landing-page/images/Certificate1.png') }}" alt="" />
              </div>
              <div class="detail-box">
                <h5>Kominfo</h5>
                <p>Literasi Digital</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end certificate section -->

    <!-- footer section -->
    <footer class="container-fluid footer_section">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-9 mx-auto">
            <p>
              &copy; 2024 All Rights Reserved By
              <a href="https://html.design/"></a>
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer section -->

    <script src="{{ asset('asset-landing-page/js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('asset-landing-page/js/bootstrap.js') }}"></script>
  </body>
</html>
