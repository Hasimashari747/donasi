@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <a href="{{ route('totaluser.create')}}" ></a>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">Nama</th>
                                <th class="d-none d-xl-table-cell">email</th>
                                <th>password</th>
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
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->password }}</td>
                                    <td>{{ $item->role }}</td>
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
@endsection
