@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
@endpush

@section('content')
<h1 class="header-title">Data Donatur</h1>
<div class="row">
	<div class="col-xl-12 col-lg-12 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <button id="btn" type="submit" class="btn btn-success mb-3"><i class="fa-solid fa-print"></i> Print</button>
                    <table class="table table-hover my-0 printTable" border="1" cellpadding="3" id="myTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">Tanggal Donasi</th>
                                <th class="d-none d-xl-table-cell">Bukti Donasi</th>
                                <th>Program</th>
                                <th class="d-none d-xl-table-cell">Jumlah Donasi</th>
                                <th class="d-none d-md-table-cell">User</th>
                                <th>Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($donatur as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->date_donation }}</td>
                                    <td>{{ $item->bukti_donation }}</td>
                                    <td>{{ $item->program->deskripsi }}</td>
                                    <td>{{ $item->jumlah_donasi }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    <td>
                                        <a href="javascript:void(0)" type="submit" class="btn btn-{{ ($item->bukti_donation == null) ? 'danger' : 'success' }} btn-sm">{{ ($item->bukti_donation == null) ? 'pending' : 'lunas' }}</a>                                    </td>
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
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
{{-- <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script> --}}
    
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
    <br>
    {{-- <script border="1" cellpadding="3">
        $(document).ready( function () {
                $('#myTable').DataTable();
            } );
    </script> --}}
@endpush
