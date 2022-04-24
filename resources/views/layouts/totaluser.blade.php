@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-12">
                <a href="{{ route('totaluser.create')}}" class="btn btn-primary">Tambah Donatur</a>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th class="d-none d-xl-table-cell">Nama</th>
                                <th class="d-none d-xl-table-cell">Image</th>
                                <th>Jenis Kelamin</th>
                                <th class="d-none d-md-table-cell">Email</th>
                                <th class="d-none d-md-table-cell">Password</th>
                                <th class="d-none d-md-table-cell">No Hp</th>
                            </tr>
                        </thead>
                        
                    </table>
				</div>  
			</div>
		</div>
	</div>
</div>
@endsection
