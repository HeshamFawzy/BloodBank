@extends('layouts.app')

@section('content')
<div>
	<div class="container" style="background-color: white; padding: 20px">
		<div class="row">
			<div class="col-md-6 col-lg-9 offset-lg-0">
				<div class="card shadow">
					<div class="card-body">
						
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<section id="vertical-menu">
					<div class="list-group"><a class="list-group-item active" href=""><i class="fa fa-home fa-fw"></i>
							Home</a><a class="list-group-item" href="{{ url('/donate')}}"><i class="far fa-registered fa-fw"></i> Donor
							Registration</a><a class="list-group-item" href="{{ url('/donor')}}"><i
								class="fas fa-hands-helping fa-fw"></i>Donor Search</a>
						<a class="list-group-item" href="#"><i class="fa fa-bank fa-fw"></i> Blood Bank</a>
					</div>
				</section>
			</div>
		</div>
	</div>
</div>
<script>
	
</script>
@endsection