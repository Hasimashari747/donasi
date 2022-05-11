@extends('layouts.app')

@section('content')

<h1 class="header-title">Data Program</h1>
<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <a href="{{ route('program.create')}}" class="btn btn-primary">Tambah program</a>
                    <table class="table table-hover my-0">
						<thead>
							<tr>
								
								<th scope="col">Banner</th>
								<th scope="col">Title</th>
								<th scope="col">Cerita</th>
								<th scope="col">Donasi Masuk</th>
								<th scope="col" colspan="2">Aksi</th>
								
							</tr>
						
						</thead>
						<tbody>
							@foreach($programs as $program)
								<tr>
									<td>
										<img src="{{ url('storage/blogs/'.$program->banner) }}" width="200" height="200" alt="banners">
									</td>
									<td>{{ $program->title}}</td>
									<td>{{ $program->story}}</td>
									<td>{{ $program->incoming_donation}}</td>
									<td>   
										<form action="{{ route('program.destroy', $program->id) }}" method="post">
										@csrf
										@method('DELETE')
											<button class="btn btn-danger">Hapus</button>
										</form>
									</td>
									<td>
										<a href="{{ route('program.edit', $program->id) }}" class="btn btn-info btn-lg">Edit</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>  
			</div>
		</div>
	</div>
</div>
@endsection
