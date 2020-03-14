@extends('layouts.app')

@section('content')
<div>
	<div class="container" style="background-color: white; padding: 20px">
		<div class="row">
			<div class="col-md-6 col-lg-9 offset-lg-0">
				<div class="card shadow">
					<div class="card-body">
						<form method="post" action="{{ route('user.donate_p')}}"
							enctype="multipart/form-data">
							{{ csrf_field() }}
							<h1 class="text-center">Donor Registration</h1>
							<div class="form-group">
								<label for="name" class="h4">Name :</label>
								<input type="text" class="form-control" name="name" required="" value="" />
							</div>

							<div class="form-group">
								<label for="bloodgroup" class="h4">Blood Group :</label>
								<select id="bloodgroup" class="form-control" name="bloodgroup" required="">
									<option value="" disabled="disabled" selected="true">Select group</option>
									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
								</select>
							</div>

							<div class="form-group">
								<label for="contactno" class="h4">Contact_No. :</label>
								<input type="number" class="form-control" name="contactno" required="" value="" />
							</div>

							<div class="form-group">
								<label for="address" class="h4">Address :</label>
								<textarea type="text" class="form-control" name="address" required=""
									value=""></textarea>
							</div>

							<div class="form-group">
								<label for="image" class="h4">Image :</label>
								<input id="upload" type="file" class="form-control" name="image"
									accept="image/gif, image/jpeg, image/png" required="" />
							</div>

							<div class="form-group">
								<input style="float: right;" type="submit" class="btn btn-primary float-right"
									name="submit" value="Donate" />
							</div>

						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<section id="vertical-menu">
					<div class="list-group"><a class="list-group-item active" href=""><i class="fa fa-home fa-fw"></i>
							Home</a><a class="list-group-item" href="{{ url('/donate')}}"><i class="far fa-registered fa-fw"></i> Donor
							Registration</a><a class="list-group-item" href="{{ url('/donor')}}"><i
								class="fas fa-hands-helping fa-fw"></i>Donor Search</a>
						<a class="list-group-item" href="{{ url('/bank')}}"><i class="fa fa-bank fa-fw"></i> Blood Bank</a>
					</div>
					<img id="img" src="#" alt="Uploaded Image" width="100%" />
				</section>
			</div>
		</div>
	</div>
</div>
<script>
	$(function () {
		$('#upload').change(function () {
			var input = this;
			var url = $(this).val();
			var ext = url.substring(url.lastIndexOf('.') + 1).toLowerCase();
			if (input.files && input.files[0] && (ext == "gif" || ext == "png" || ext == "jpeg" || ext == "jpg")) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#img').attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
			else {
				$('#img').attr('src', '/assets/no_preview.png');
			}
		});

	});
</script>
@endsection