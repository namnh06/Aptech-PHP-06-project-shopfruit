<!DOCTYPE html>
<html>
<!-- Head HTML -->
<head>
@include('front.template.head-front')
@yield('css')
</head>
<!-- End Head HTML -->
<body class="green">
@include('front.template.announcement')
@include('front.template.error')
<!-- POPUP LOGIN-REGISTER -->
@include('front.template.login-register-popup-front')
<!--EN LOGIN REGISTER-->
<!-- Side Cart -->
@yield('side-cart')
<!--End Side Cart -->
<!-- HEADER -->
@include('front.template.header-front')
<!-- end header -->
<!-- Slide Home -->
@yield('slide')
<!-- End Slide Home -->
<!-- Content Page -->
@yield('content')
<!-- End Content Page -->


<!-- Footer -->
@include('front.template.footer-front')
<!-- End Footer -->
<!-- Script & scroll bottom -->
@include('front.template.script-bottom-front')
@yield('script')
<!-- End Script & scroll bottom -->
</body>

</html>