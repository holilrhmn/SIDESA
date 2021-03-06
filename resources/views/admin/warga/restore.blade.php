@extends('admin.templates.default')

@section('content')

<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Warga Yang Dihapus</h3>
        <div class="btn-group ml-3" role="group" aria-label="...">
            <a href="{{route('admin.warga.kembalikan_semua')}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>Kembalikan Semua</a>
            <a href="{{ route('admin.warga.hapus_semua') }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>Hapus Semua</a>
        </div>
        
    <div class="card-body">
        @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif
    @if ($message = Session::get('error'))
      <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
      </div>
    @endif
        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>

                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Tempat Lahir</th>
                    <th>Alamat</th>
                    <th>Telp</th>
                    <th>Agama</th>
                    <th>Pekerjaan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($warga as $w)
                <tr>
                    <td>{{ $w->NIK }}</td>
                    <td>{{ $w->nama }}</td>
                    <td>{{ $w->tanggal_lahir }}</td>
                    <td>{{ $w->tempat_lahir }}</td>
                    <td>{{ $w->alamat }}</td>
                    <td>{{ $w->telp }}</td>
                    <td>{{ $w->agama }}</td>
                    <td>{{ $w->pekerjaan }}</td>
                    <td>
                        <a href="{{ route('admin.warga.kembalikan', $w->id)  }}" class="btn btn-success btn-sm">Restore</a>
                        <a href="{{ route('admin.warga.hapus_permanen',$w->id) }}" id="delete" class="btn btn-danger btn-sm">Hapus Permanen</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<form action="" method="post" id="deleteForm">
    @csrf
    @method("DELETE")
    <input type="submit" value="Hapus" style="display:none">
</form>
@endsection('content')

@push('styles')
    <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
@endpush
<script>
    $('button#delete').on('click', function(e){
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah Kamu yakin akan menghapus data ini?',
            text: "Data yang sudah dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
            }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                    Swal.fire(
                    'Berhasi Dihapus!',
                    'Data Kamu Berhasil Dihapus.',
                    'success'
                    )
                }
            })


    })
</script>
@push('scripts')
    
    <!-- DataTables -->
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    @include('admin.templates.partials.alerts')

@endpush
