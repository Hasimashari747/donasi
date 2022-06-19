@extends('layouts.app')

@section('content')
<div class="main-content">
            <!-- page title area end -->
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Edit Profile</div>
                        <form action="{{ route('profile.update', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <input accept="image/*" name="image" type="file" id="imgInp"/>
                                <img id="blah" src="{{ url('storage/', Auth::user()->image) }}"  alt="Your image" class="rounded-circle" width="123"/>
                            </div>  
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                <input type="email" class="form-control" value="{{ Auth::user()->email }}"
                                id="exampleFormControlInput1" name="email" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"
                                id="exampleFormControlInput1" placeholder="">
                            </div>
                            {{-- <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">password</label>
                                <input type="text" class="form-control" name="password" value="{{ Auth::user()->password }}"
                                id="exampleFormControlInput1" placeholder="">
                            </div> --}}
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">alamat</label>
                                <input type="text" class="form-control" name="alamat" value="{{ Auth::user()->alamat }}"
                                id="exampleFormControlInput1" placeholder="">
                            </div>
                           
                            <div class="mb-3">
                                 
                            <label for="jenis_kelamin">jenis kelamin</label>

                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                              <option value="L">laki-laki</option>
                              <option value="P">perempuan</option>
                            </select>   
                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="{{ Auth::user()->tgl_lahir }}"
                                id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Nomor hp</label>
                                <input type="text" class="form-control" name="no_hp" value="{{ Auth::user()->no_hp }}"
                                id="exampleFormControlInput1" placeholder="">
                            </div>
                            <div class="card-text"> 
                              <button class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('script')
<script>
    imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
</script>
@endpush