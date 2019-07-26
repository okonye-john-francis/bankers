
@extends('index')

@section('content')

	<div class="container">
		<form action="" method="" enctype='multipart/form-data'>
			<div class="row">
				<div class="form-group col-lg-5">
					<label>Select Month</label>
					<select class="custom-select">
						<option>January</option>
						<option>Frebruary</option>
						<option>March</option>
						<option>April</option>
						<option>May</option>
						<option>June</option>
						<option>July</option>
						<option>August</option>
						<option>September</option>
						<option>October</option>
						<option>November</option>
						<option>December</option>
					</select>
				</div>
				<div class="col-lg-3">
					<label>Select Year</label>
					<select class="custom-select">
						<option>2019</option>
						<option>2020</option>
						<option>2021</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-5">
					<label>Text Box field</label>
					<input type="text" class="form-control" name="">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-5">
					<label>Choose Data Set</label><br>
					<input type="file" name="">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-lg-5 mt-4">
					<button class="btn btn-success">SUBMIT INFORMATION</button>
				</div>
			</div>
		</form>
	</div>

@endsection