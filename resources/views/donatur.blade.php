@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <a href="{{ route('donatur.create')}}" ></a>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">Tanggal Donasi</th>
                                <th class="d-none d-xl-table-cell">Bukti Donasi</th>
                                <th>Id Program</th>
                                <th class="d-none d-md-table-cell">Id User</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donatur as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->tgl_donasi }}</td>
                                    <td>{{ $item->bukti_donasi }}</td>
                                    <td>{{ $item->id_program }}</td>
                                    <td>{{ $item->id_user }}</td>
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
