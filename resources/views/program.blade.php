@extends('layouts.app')

@push('style')
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
@endpush

@section('content')

<h1 class="header-title">Data Program</h1>

<div class="row">
	<div class="col-xl-12 col-lg-12 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
					<a href="{{ route('program.create')}}" class="btn btn-primary">Tambah program</a>
                
				<div class="table-responsive">
                    <table class="table table-hover" id="tableProgram">
						<thead>

							<tr>
								<th>Banner</th>
								<th>Nama panti</th>
								<th>Deskripsi</th>
								<th>lokasi</th>
								<th>kontak</th>
								<th>nomor rekening</th>
								<th>Donasi Terkumpul</th>
								<th>Target Donasi</th>
								<th>Aksi</th>
							</tr>
						
						</thead>
						<tbody>

							@foreach($programs as $program)

							@php
								$sumJumlahDonationId = 
								App\Models\Donation::where('program_id', $program->id)
														->where('bukti_donation', '!=', '')
														->sum('jumlah_donasi');
							@endphp

								<tr>
									<td>
										<img src="{{ url('storage/'.$program->banner) }}" width="175" height="100" alt="banners"> 
									</td>
									<td>{{ $program->nama_panti}}</td>
									<td>{{ $program->deskripsi}}</td>
									<td>{{ $program->lokasi}}</td>
									<td>{{ $program->kontak}}</td>
									<td>{{ $program->nomor_rekening}}</td>
									<td>
										{{ $sumJumlahDonationId }}
									</td>
									<td>{{ $program->target_donation}}</td>
								
									<td> 
										@if ($sumJumlahDonationId == $program->target_donation)

											<span class="badge rounded-pill bg-danger">Dana telah terkumpul</span>
											<a href="{{ route('program.show', $program->id) }}" class="btn btn-info">Detail</a>
										@else	
											<a href="{{ route('program.show', $program->id) }}" class="btn btn-warning"><i class="fas fa-solid fa-eye"></i>Lihat</a>
											<a href="{{ route('program.edit', $program->id) }}" class="btn btn-info btn-lg">Edit</a>  
											<form action="{{ route('program.destroy', $program->id) }}" method="post">
											@csrf
											@method('DELETE')
												<button class="btn btn-danger">Hapus</button>
											</form>
										@endif
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
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
	<script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

	<script>
		$(document).ready( function () {
				$('#tableProgram').DataTable();
			} );

	</script>
@endpush