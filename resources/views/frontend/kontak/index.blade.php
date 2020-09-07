@extends('frontend.defaultHead')

@section('content')
<style>



</style>
    <div class="container">
        <h3 class="light grey-text text-darken-3 center">Hubungi Kami</h3>
        @if (session('success_message'))
        <div class="card-panel green accent-3 white-text">
           <b> {{ session('success_message') }} </b>
        </div>
        @endif
        <div class="row">
            <div class="col m5 s12">
                @foreach ($profil as $p)


                <div class="card-panel teal lighten-2 center white-text">
                    <i class="material-icons medium">email</i>
                    <h4>Kontak</h4>
                    <p>Hubungin Kontak Desa Dibawah Ini</p>
                </div>
                <ul class="collection with-header">
                    <li class="collection-header"><h5>{{ $p->nama }}</h5></li>
                    <li class="collection-item">{{ $p->alamat }}</li>
                    <li class="collection-item">{{ $p->telp }} </li>
                    <li class="collection-item">{{ $p->email }}</li>
                </ul>
                @endforeach
            </div>
            <div class="col m7 s12">
                <form action="{{ route('kontak.store')}}" method="POST">
                    @csrf
                    <div class="card-panel">
                        <h4>Silahkan Hubungi Kami</h4>
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input type="text" name="nama" required class="validate">
                            <label for="nama">Nama</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" name="email" class="validate">
                            <label for="email">Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">call</i>
                            <input type="text" name="telp">
                            <label for="telp">No Handphone</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">comment</i>
                            <textarea name="pesan" class="materialize-textarea"></textarea>
                            <label for="pesan">Pesan</label>
                        </div>
                        <button type="submit" id="btnresult"class="btn">Kirim <i class="material-icons right">send</i></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col s12 l12">
                <div class="card teal lighten-2 ">
                    <div class="card-content white-text">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255204.7408195028!2d116.15471658732025!3d-1.921837071096532!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df049d8ab92a811%3A0xc3328b9836263e05!2sTanah%20Grogot%2C%20Kabupaten%20Paser%2C%20Kalimantan%20Timur!5e0!3m2!1sid!2sid!4v1599460059128!5m2!1sid!2sid" width="100%" height="250px" frameborder="0" style="border:0; " allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                    </div>

                  </div>
            </div>
        </div>
    </div>

    @include('sweetalert::alert')
@endsection
