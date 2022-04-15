@extends('layouts.app')

@section('content')
<h1>Tambahkan Program</h1>

<div class="card">
  <div class="card-body">
  <div class="row">
    <div class="col-xl-12 col-xxl-12 ">
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Banner</label>
          <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Tambahkan Benner</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputtitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputTitle">
        </div>
        <div class="mb-3">
          <label for="exampleInputCerita" class="form-label">Cerita</label>
          <input type="text" class="form-control" id="exampleInputCerita">
        </div>
        <div class="mb-3">
          <label for="exampleInputAktivitas" class="form-label">aktivitas</label>
          <input type="text" class="form-control" id="exampleInputAktivitas">
        </div>
        <div class="mb-3">
          <label for="exampleInputDonasiMasuk" class="form-label">Donasi Masuk</label>
          <input type="text" class="form-control" id="exampleInputDonasiMasuk">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
        <button type="submit" class="btn btn-primary">Kembali</button>
    </form>
    </div>
  </div>
</div>
</div>
@endsection
