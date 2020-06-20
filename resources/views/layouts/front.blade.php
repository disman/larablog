<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta content="width=device-width, initial-scale=1.0" name="viewport">

   <title>Laravel Blog</title>
   <meta content="" name="descriptison">
   <meta content="" name="keywords">

   <!-- Favicons -->
   <link href="{{ asset('front/img/favicon.png') }}" rel="icon">
   <link href="{{ asset('front/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="{{ asset('front/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ asset('front/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
   <link href="{{ asset('front/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
   <link href="{{ asset('front/vendor/venobox/venobox.css') }}" rel="stylesheet">
   <link href="{{ asset('front/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
   <link href="{{ asset('front/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
   <link href="{{ asset('front/vendor/aos/aos.css') }}" rel="stylesheet">

   <!-- Template Main CSS File -->
   <link href="{{ asset('front/css/style.css') }}" rel="stylesheet">

</head>

<body>

   <!-- ======= Header ======= -->
   @include('front.header')
   <!-- End Header -->

   <!-- ======= Hero Section ======= -->
   @include('front.hero')
   <!-- End Hero -->

   <main id="main">

      <!-- ======= About Section ======= -->
      @include('front.about')
      <!-- End About Section -->

      <!-- ======= Features Section ======= -->
      @include('front.features')
      <!-- End Features Section -->

      <!-- ======= Counts Section ======= -->
      @include('front.count')
      <!-- End Counts Section -->

      <!-- ======= Details Section ======= -->
      @include('front.details')
      <!-- End Details Section -->

      <!-- ======= Gallery Section ======= -->
      @include('front.gallery')
      <!-- End Gallery Section -->

      <!-- ======= Testimonials Section ======= -->
      @include('front.testimonials')
      <!-- End Testimonials Section -->

      <!-- ======= Team Section ======= -->
      @include('front.team')
      <!-- End Team Section -->

      <!-- ======= Pricing Section ======= -->
      @include('front.pricing')
      <!-- End Pricing Section -->

      <!-- ======= F.A.Q Section ======= -->
      @include('front.faq')
      <!-- End F.A.Q Section -->

      <!-- ======= Contact Section ======= -->
      @include('front.contact')
      <!-- End Contact Section -->

   </main><!-- End #main -->

   <!-- ======= Footer ======= -->
   @include('front.footer')
   <!-- End Footer -->

   <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
   <div id="preloader"></div>

   <!-- Vendor JS Files -->
   <script src="{{ asset('front/vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('front/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ asset('front/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
   <script src="{{ asset('front/vendor/php-email-form/validate.js') }}"></script>
   <script src="{{ asset('front/vendor/venobox/venobox.min.js') }}"></script>
   <script src="{{ asset('front/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
   <script src="{{ asset('front/vendor/counterup/counterup.min.js') }}"></script>
   <script src="{{ asset('front/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('front/vendor/aos/aos.js') }}"></script>

   <!-- Template Main JS File -->
   <script src="{{ asset('front/js/main.js') }}"></script>

</body>

</html>