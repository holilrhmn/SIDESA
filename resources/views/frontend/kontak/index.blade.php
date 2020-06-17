@extends('frontend.defaultHead')

@section('content')
    <div class="container">
        <h3 class="light grey-text text-darken-3 center">Hubungi Kami</h3>
        @if (session('success_message'))
        <div class="card-panel green accent-3 white-text">
           <b> {{ session('success_message') }} </b>
        </div>
        @endif
        <div class="row">
            <div class="col m5 s12">
                <div class="card-panel teal lighten-2 center white-text">
                    <i class="material-icons medium">email</i>
                    <h4>Kontak</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum error excepturi earum hic ex. Perferendis repellendus sapiente id eos, magnam tenetur in asperiores? Blanditiis, aliquid nisi eligendi quos totam quis.</p>
                </div>
                <ul class="collection with-header">
                    <li class="collection-header"><h5>Desa</h5></li>
                    <li class="collection-item">Desa Sukadamai </li>
                    <li class="collection-item">09898980809 </li>
                    <li class="collection-item">Jl. Desa Sukadamai No 09, indonesia </li>
                </ul>
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
    </div>

    @include('sweetalert::alert')
@endsection
