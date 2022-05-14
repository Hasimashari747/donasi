@extends('layouts.app')

@section('content')
<h1 class="header-title">Data Donatur</h1>
<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <a href="{{ route('donatur.create')}}" ></a>
                    <table class="table table-hover my-0" id="myTable">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">Tanggal Donasi</th>
                                <th class="d-none d-xl-table-cell">Bukti Donasi</th>
                                <th>Program</th>
                                <th class="d-none d-md-table-cell">User</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($donatur as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->date_donation }}</td>
                                    <td>{{ $item->bukti_donation }}</td>
                                    <td>{{ $item->program->title }}</td>
                                    <td>{{ $item->user->name }}</td>
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
