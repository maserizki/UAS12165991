<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>WEB PROGRAMMING II Semester 6</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Ahya Mustopa</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('invoice/new') }}">Invoices</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('invoice') }}">Invoice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('product') }}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ url('customer') }}">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">Register</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
     <div class="aa-logo">
      <a href="{{ url('/product/new') }}">
      <span class="fa fa-shopping-cart"></span>
        <p>Distro<strong>ThreeColor</strong> <span>ThreeColor Store</span></p>
        </a>
     </div>
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Distro Three Color</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">KEPUASAN PELANGGAN MERUPAKAN SALAH SATU CIRI PRIORITAS DALAM SEGI MOTO DISTRO KAMI</h2>
        <a href="#about" class="btn btn-primary js-scroll-trigger">Sejarah Perusahaan</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Perkenalan Distro Three Color</h2>
          <p class="text-white-50">Distro Three Color didirikan pada tanggal 25 Januari 2008 oleh bapak didit yang berasal dari bogor. Nomor surat ijin usaha Three Color ini adalah No:145/27/Bondes  dengan alamat Jl. Kebon pedes No.02, Kota Bogor. Provinsi Jawa Barat. Sebagai  sebuah Distro yang bergerak di bidang fashion, Distro Three Color ini sudah mulai terkenal dikalangan remaja bogor.  
	Distro Three Color sebagai clothing company, dimotori oleh didit pada tahun 2008 yang didukung oleh helvi dan adit sebagai rekan usahanya. Three color  memfokuskan pada fashion  untuk pria. Mereka  mulai memproduksi barang-barang yang  menunjang  hobi mereka untuk digunakan sendiri. Ternyata apa yang mereka pakai menarik perhatian  teman-teman mereka. Dengan modal patungan seadanya mereka memulai memproduksi barang-barang yang mereka desain untuk kebutuhan hobi  mereka itu, untuk dijual dikalangan teman-teman mereka sendiri dijalan kebon pedes bogor. 
            <a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>Hobi dan semangat  kreativitas mereka membuat usaha yang mereka buat saat ini berkembang dari tahun  ketahun sehingga saat ini mereka mempunyai Toko sendiri dengan nama Three Color.</p>
        </div>
      </div>
      <img src="../design/slider/ahya10.jpg" class="img-fluid" alt="">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="../design/slider/discounte.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Pusat Perbelanjaan Murah Meriah</h4>
            <p class="text-black-50 mb-0">Produk - Produk Sangat Berkualitas, tanpa adanya pemalsuan dan bergaransi baik produk yang di eksport ataupun di import</p>
          </div>
        </div>
      </div>

      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="../design/slider/promo.jpg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>BIG SALE PROMO!!!</h4>
            <p class="text-black-50 mb-0">Harga Terjangkau dan Pastinya Sangat Merakyat, Discount Mulai Dari 5%, Bahkan Hingga Sampai 50%, 10x Lipat dari Discount awalnya, Jadi Tunggu apa Lagi Langsung saja Datang ke Distro Kami Atau Melakukan Pesan Online, Bisa COD/Transfer</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="../design/objek/Kaos_Couple.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Kaos Buddy Love</h4>
                <p class="mb-0 text-white-50">Bahan : Cotton <br> Ukuran : M, L, XL <br> Warna : Abu-abu, Putih <br></p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="../design/objek/celanaa.jpg" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Celana Polo</h4>
                <p class="mb-0 text-white-50">Bahan : Cotton <br> Ukuran : M, L, XL <br> Warna : Cream, Khaki</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

            <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="../design/objek/sepatuu.jpg" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Hiking Boots</h4>
                <p class="mb-0 text-white-50">Bahan : Kulit Rusa <br> Ukuran : 42, 43, 44 <br> Warna : Cokelat, Hitam <br></p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Saran dan Kritik melalui Pesan Email!!!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Comment</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">Jl. Kebon pedes No.02, Kota Bogor. Provinsi Jawa Barat.</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">threecolor@gmail.co.id</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Contact</h4>
              <hr class="my-4">
              <div class="small text-black-50">+62 (896) 524-43420</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Nocopyright &copy; My Website ThreeColor 2019 if not permit to Ahya Admin
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
