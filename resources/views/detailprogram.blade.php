@extends('layouts.app')

@push('style')
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
@endpush

@section('content')

<h1 class="header-title">Data Donator Program {{ $programId->nama_panti }}</h1>

<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
					{{-- <a href="{{ route('program.create')}}" class="btn btn-primary"></a> --}}
                
				<div class="table-responsive">
                    <table class="table table-hover" id="tableProgram">
						<thead>

							<tr>
                                <th>No.</th>
								<th>Nama Donatur</th>
								<th>No Rek</th>
								<th>Jumlah Donasi</th>
							</tr>
						
						</thead>
						<tbody>

							@foreach($programs as $program)
								<tr>
									<td>{{ $loop->iteration}}</td>
                                    <td>{{ $program->nama_panti }}</td>
                                    <td>{{ $program->nomor_rekening }}</td>
                                    <td>{{ $program->donation->jumlah_donasi }}</td>

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