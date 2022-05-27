@extends('layouts.app')

@section('content')
<h1>Tambahkan Program</h1>

<div class="card">
  <div class="card-body">
  <div class="row">
    <div class="col-xl-12 col-xxl-12 ">
      <form action="{{ route('program.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Banner</label>
          <input type="file" class="form-control @error('banner') is-invalid @enderror" id="" name="banner">
          <div id="" class="form-text">Tambahkan Benner</div>
          @error('banner')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        {{-- <input type="text" value=""> --}}
        <div class="mb-3">
          <label for="exampleInputtitle" class="form-label">nama panti</label>
          <input type="text" class="form-control @error('nama_panti') is-invalid @enderror" id="exampleInputnamapanti" name="nama_panti">
          @error('nama_panti')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputCerita" class="form-label">deskripsi</label>
          <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleInputCerita" name="deskripsi">
          @error('deskripsi')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputDonasiMasuk" class="form-label">lokasi</label>
          <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="exampleInputDonasiMasuk" name="lokasi">
          @error('lokasi')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputDonasiMasuk" class="form-label">kontak</label>
          <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="exampleInputDonasiMasuk" name="kontak">
          @error('kontak')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputDonasiMasuk" class="form-label">nomor rekening</label>
          <input type="text" class="form-control @error('nomor_rekening') is-invalid @enderror" id="exampleInputDonasiMasuk" name="nomor_rekening">
          @error('nomor_rekening')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputDonasiMasuk" class="form-label">Target Donasi</label>
          <input type="text" class="form-control @error('target_donation') is-invalid @enderror" id="exampleInputDonasiMasuk" name="target_donation">
          @error('target_donation')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <button type="submit" class="btn btn-primary">Kembali</button>
    </form>
    </div>
  </div>
</div>
</div>
@endsection
