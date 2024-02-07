@extends('layout')

@section('title', 'Sistem Pengaduan Masyarakat')
@section('content')
  <div class="container mt-5">
    <div class="row mt-5 justify-content-center">
      <div class="col-md-12">
        <div class="card shadow">
          <div class="card-header">
              List Pengaduan
          </div>
          <div class="card-body mx-auto">
            @foreach($model as $pengaduan)
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pengaduan->judul_pengaduan }}</h5>
                        <p class="card-text">{{ $pengaduan->isi_laporan }}</p>
                        <img src="{{asset($pengaduan->foto)}}" width="400px" height="300px" alt="">
                        <p class="card-text">Pengadu : {{ $pengaduan->masyarakat->username }}</p>
                        <p class="card-text">Tanggal  : {{ $pengaduan->tanggal_pengaduan }}</p>
                    </div>
                </div>
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>

                {{-- <a href="{{url('/masyarakat/login')}}" class="btn btn-danger">Login Masyarakat</a>
              <a href="{{url('/petugas/login')}}" class="btn btn-info">Login Petugas</a> --}}

@endsection
