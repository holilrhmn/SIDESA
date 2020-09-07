<!DOCTYPE html>
<html lang="en">
    @include('frontend.templates.partials.head')
<body>
    <!--Navbar-->
    @include('frontend.templates.partials.nav')
    <!--slider-->
    <div class="slider">
        <ul class="slides">
          <li>
            <img src="{{asset('assets/dist/img/slider/img1.png')}}">
            <div class="caption center-align">
              <h3><b>SELAMAT DATANG DI SIDESA</b></h3>
              <h5 class="light grey-text text-lighten-3"><b>Akses Cepat Informasi Desamu Sekarang.</b></h5>
            </div>
          </li>
          <li>
            <img src="{{asset('assets/dist/img/slider/img2.png')}}">
            <div class="caption left-align">
              <h3><b>SELAMAT DATANG DI SIDESA</b></h3>
              <h5 class="light grey-text text-lighten-3"><b>Akses Cepat Informasi Desamu Sekarang.</b></h5>
            </div>
          </li>
          <li>
            <img src="{{asset('assets/dist/img/slider/img6.png')}}">
            <div class="caption right-align">
              <h3><b>SELAMAT DATANG DI SIDESA</b></h3>
              <h5 class="light grey-text text-lighten-3"><b>Akses Cepat Informasi Desamu Sekarang.</b></h5>
            </div>
          </li>
          <li>
            <img src="{{asset('assets/dist/img/slider/img4.png')}}">
            <div class="caption center-align">
              <h3><b>SELAMAT DATANG DI SIDESA</b></h3>
              <h5 class="light grey-text text-lighten-3"><b>Akses Cepat Informasi Desamu Sekarang.</b></h5>
            </div>
          </li>
          <li>
            <img src="{{asset('assets/dist/img/slider/img5.png')}}">
            <div class="caption center-align">
              <h3><b>SELAMAT DATANG DI SIDESA</b></h3>
              <h5 class="light grey-text text-lighten-3"><b>Akses Cepat Informasi Desamu Sekarang.</b></h5>
            </div>
          </li>
        </ul>
    </div>

    <!--Pengumuman-->

    @yield('content')


    @include('frontend.templates.partials.footer')
    @include('frontend.templates.partials.scripts')
</body>
</html>
