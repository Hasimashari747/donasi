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
          <input type="file" class="form-control" id="" name="banner" value="{{ $programId->banner }}">
          <div id="" class="form-text">Tambahkan Benner</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputNamaPanti" class="form-label">nama panti</label>
          <input type="text" class="form-control" id="exampleInputTitle" name="nama_panti"  value="{{ $programId->nama_panti }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputDeskripsi" class="form-label">deskripsi</label>
          <input type="text" class="form-control" id="exampleInputCerita" name="deskripsi" value="{{ $programId->deskripsi }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputLokasi" class="form-label">lokasi</label>
          <input type="text" value="{{ $programId->lokasi }}" class="form-control" id="exampleInputDonasiMasuk" name="lokasi">
        </div>
        <div class="mb-3">
          <label for="exampleInputKontak" class="form-label">kontak</label>
          <input type="text" value="{{ $programId->kontak }}" class="form-control" id="exampleInputDonasiMasuk" name="kontak">
        </div>
        <div class="mb-3">
          <label for="exampleInputNomorRekening" class="form-label">nomor rekening</label>
          <input type="text" value="{{ $programId->nomor_rekening }}" class="form-control" id="exampleInputDonasiMasuk" name="nomor_rekening">
        </div>
        <div class="mb-3">
          <label for="exampleInputTargetDonasi" class="form-label">Target Donasi</label>
          <input type="text" value="{{ $programId->target_donation }}" class="form-control" id="exampleInputTargetDonasi" name="target_donation">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        {{-- <button type="submit" class="btn btn-primary">Cancel</button> --}}
    </form>
    </div>
  </div>
</div>
</div>
@endsection
