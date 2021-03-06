@extends('layouts.app')

@section('content')
<h1>Edit Program</h1>

<div class="card">
  @if(Session::has('message'))
    {{Session::get('message')}}
  @endif
  <div class="card-body">
  <div class="row">
    <div class="col-xl-12 col-xxl-12 ">
      <form action="{{ route('program.update', $programId->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="" class="form-label">Banner</label>
          <input type="file" class="form-control @error('banner') is-invalid @enderror" id="" name="banner" value="{{ $programId->banner }}">
          <div id="" class="form-text">Tambahkan Banner</div>
            @error('banner')
            <div class="invalid-feedback">
             {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputNamaPanti" class="form-label">nama panti</label>
          <input type="text" class="form-control @error('nama_panti') is-invalid @enderror" id="exampleInputTitle" name="nama_panti"  value="{{ $programId->nama_panti }}">
          @error('nama_panti')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputDeskripsi" class="form-label">deskripsi</label>
          <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" id="exampleInputCerita" name="deskripsi" value="{{ $programId->deskripsi }}">
          @error('deskripsi')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputLokasi" class="form-label">lokasi</label>
          <input type="text" value="{{ $programId->lokasi }}" class="form-control @error('lokasi') is-invalid @enderror" id="exampleInputDonasiMasuk" name="lokasi">
          @error('lokasi')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputKontak" class="form-label">kontak</label>
          <input type="text" value="{{ $programId->kontak }}" class="form-control @error('kontak') is-invalid @enderror" id="exampleInputDonasiMasuk" name="kontak">
          @error('kontak')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputNomorRekening" class="form-label">nomor rekening</label>
          <input type="text" value="{{ $programId->nomor_rekening }}" class="form-control @error('nomor_rekening') is-invalid @enderror" id="exampleInputDonasiMasuk" name="nomor_rekening">
          @error('nomor_rekening')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputTargetDonasi" class="form-label">Target Donasi</label>
          <input type="text" value="{{ $programId->target_donation }}" class="form-control @error('target_donation') is-invalid @enderror" id="exampleInputTargetDonasi" name="target_donation">
          @error('target_donation')
          <div class="invalid-feedback">
           {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        {{-- <button type="submit" class="btn btn-primary">Cancel</button> --}}
    </form>
    </div>
  </div>
</div>
</div>
@endsection
