@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xl-12 col-xxl-5 d-flex">
		<div class="w-100">
			<div class="row">
				<div class="col-sm-4">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="col mt-0">
									<h5 class="card-title">program</h5>
								</div>

								<div class="col-auto">
									<div class="stat text-primary">
										<i class="align-middle" data-feather="map"></i>
									</div>
								</div>
							</div>
							<h1 class="mt-1 mb-3">{{ $totalprogram }}</h1>
							
						</div>
					</div>
				</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col mt-0">
										<h5 class="card-title">Total User</h5>
									</div>
	
									<div class="col-auto">
										<div class="stat text-primary">
											<i class="align-middle" data-feather="users"></i>
										</div>
									</div>
								</div>
								<h1 class="mt-1 mb-3">{{ $totaluser }}</h1>
					
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col mt-0">
										<h5 class="card-title">Donatur</h5>
									</div>
	
									<div class="col-auto">
										<div class="stat text-primary">
											<i class="align-middle" data-feather="dollar-sign"></i>
										</div>
									</div>
								</div>
								<h1 class="mt-1 mb-3">{{ $totaldonation }}</h1>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
		</div>
	</div>
</div>
@endsection