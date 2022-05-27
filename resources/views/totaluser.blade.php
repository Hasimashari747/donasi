@extends('layouts.app')


@push('style')
	<link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
@endpush

@section('content')
<h1 class="header-title">Data User</h1>
<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <a href="{{ route('totaluser.create')}}" ></a>
                <div class="table-responsive">
                    <table class="table table-hover" id="myTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">Name</th>
                                <th class="d-none d-xl-table-cell">email</th>
                                {{-- <th>password</th> --}}
                                <th class="d-none d-md-table-cell">role</th>
                                <th class="d-none d-md-table-cell">image</th>
                                <th class="d-none d-md-table-cell">alamat</th>
                                <th class="d-none d-md-table-cell">jenis kelamin</th>
                                <th class="d-none d-md-table-cell">tanggal lahir</th>
                                <th class="d-none d-md-table-cell">Nomor Hp</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($totaluser as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->email }}</td>
                                    {{-- <td>{{ $item->password }}</td> --}}
                                    <td>{{ ($item->role == 1) ? 'admin' : 'user' }}</td>
                                    <td>{{ $item->image }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->tgl_lahir }}</td>
                                    <td>{{ $item->no_hp }}</td>
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
				$('#myTable').DataTable();
			} );
	</script>
@endpush