@extends('layouts.app')

@push('style')
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
@endpush

@section('content')

<h1 class="header-title">Data Donator Program {{ $programId->nama_panti }}</h1>

<div class="row">
	<div class="col-xl-12 col-lg-12 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
					<button id="btn" type="submit" class="btn btn-success mb-3"><i class="fa-solid fa-print"></i> Print</button>
					{{-- <a href="{{ route('program.create')}}" class="btn btn-primary"></a> --}}
                
				<div class="table-responsive">
                    <table class="table table-hover my-0 printTable" border="1" cellpadding="3" id="myTable">
						<thead>

							<tr>
                                <th>No.</th>
								<th>Nama Donatur</th>
								<th>Jumlah Donasi</th>
							</tr>
						
						</thead>
						<tbody>

							@foreach($programs as $program)
								<tr>
									<td>{{ $loop->iteration}}</td>
                                    <td>{{ $program->user->name }}</td>
                                    <td>{{ $program->jumlah_donasi }}</td>
								</tr>
							@endforeach

						</tbody>
					</table>
		
					<a href="{{ URL::previous() }}" class="btn btn-primary"><i class="fas fa-solid fa-eye"></i>Kembali</a>
					{{-- <button type="submit" class="btn btn-primary">Kembali</button> --}}
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
	<script>    
        // alert('hello')
        function printData()
        { 
        var divToPrint=document.getElementById("myTable");
        newWin= window.open("");
        newWin.document.write(divToPrint.outerHTML);
        newWin.print();
        newWin.close();
        }

        $('button').on('click',function(){
            // alert('hello')
        printData();
        })
    </script>
	
@endpush