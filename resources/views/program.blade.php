@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <a href="{{ route('program.create')}}" class="btn btn-primary">Tambah program</a>
                    <table class="table table-hover my-0">
						<thead>
							<tr>
								<th>Banner</th>
								<th class="d-none d-xl-table-cell">Title</th>
								<th class="d-none d-xl-table-cell">Cerita</th>
								<th>Aktivitas</th>
								<th class="d-none d-md-table-cell">Donasi Masuk</th>
							</tr>
						</thead>
						
					</table>
				</div>  
			</div>
		</div>
	</div>
</div>
@endsection
