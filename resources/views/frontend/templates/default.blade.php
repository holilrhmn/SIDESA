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

    <section id="about" class="about">
        <div class="container">
            <div class="row">
                 <h4 class="center light grey-text text-darken-3 ">Tentang SIDESA</h4>
                 <div class="col m6 light">
                     <h5>SIDESA</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, doloribus quae dolore fugiat incidunt ab ullam optio praesentium impedit tenetur assumenda obcaecati nobis quisquam qui consectetur, voluptatem, sed veniam itaque.</p>
                 </div>
                 <div class="col m6 light">
                     <h5>Fungsi SIDESA</h5>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo ratione natus iure laborum delectus! Cupiditate ad dolor dolores eius recusandae odio, modi sunt quos officiis omnis aliquid aut officia? Vitae.</p>
                 </div>
            </div>
        </div>
    </section>
    @include('frontend.templates.partials.footer')
    @include('frontend.templates.partials.scripts')
</body>
</html>
