@extends('layouts.app')

@section('content')
<h1>Edit Program</h1>

<div class="card">
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
          <label for="exampleInputtitle" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleInputTitle" name="title"  value="{{ $programId->title }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputCerita" class="form-label">Cerita</label>
          <input type="text" class="form-control" id="exampleInputCerita" name="story" value="{{ $programId->story }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputDonasiMasuk" class="form-label">Donasi Masuk</label>
          <input type="text" value="{{ $programId->incoming_donation }}" class="form-control" id="exampleInputDonasiMasuk" name="incoming_donation">
        </div>
      
        <button type="submit" class="btn btn-primary">Ubah Data</button>
        
    </form>
    </div>
  </div>
</div>
</div>
@endsection
