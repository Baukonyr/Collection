@extends('layouts.Backend.app')

@section('content')
<div class="col-lg-12" style="margin: 2px; padding:10px;">
	<div class="justify-content-center">
		<form method="POST" action="{{route('coin.store')}}" enctype="multipart/form-data">
		{{ csrf_field() }}
			<div class="container col-lg-8"  style="//background-color:red;">
				<div class="container text-center">
					<h4>Добавить монету в Коллекцию</h4>
				</div>
				
				<hr style="background-color: #20a8d8;">
				
				<div class="form-group row">
					<label for="array[name]" class="col-sm-1 col-form-label">Name</label>
						<div class="col-sm-5">
							<input type="text" class="form-control" id="array[name]" placeholder="Name" name="array[name]">
						</div>
					<label for="exampleFormControlFile1" class="col-sm-1 col-form-label">Photo</label>
					<div class="col-sm-4">
							<input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
					</div>
				</div>
				<div class="form-group row">
					<label for="array[description]" class="col-sm-1 col-form-label">Description</label>
						<div class="col-sm-10">
							<textarea rows="10" class="form-control" id="array[description]" placeholder="description" name="array[description]"></textarea>
						</div>
				</div>
				
				<hr style="background-color: #20a8d8;">
				
				<div class="form-group row">
					<label for="array[state]" class="col-sm-1 col-form-label">State</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="array[state]" placeholder="State" name="array[state]">
					</div>
					<label for="array[year]" class="col-sm-1 col-form-label">Year</label>
					<div class="col-sm-2">
						<input type="number" class="form-control" id="array[year]" placeholder="Year" name="array[year]">
					</div>
					<label for="array[metal]" class="col-sm-1 col-form-label">Metal</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="array[metal]" placeholder="metal" name="array[metal]">
					</div>
					<label for="cost" class="col-sm-1 col-form-label">Cost</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="cost" placeholder="cost" name="cost">
					</div>
				</div>
				
				<hr style="background-color: #20a8d8;">
				
				<div class="container text-center">
					<label for="restoration" class="col-sm-3 col-form-label">Дефекты</label>
						<div class="container text-center">
							<label class="switch switch-pill switch-primary">
								<input type="checkbox" class="switch-input" id="defects" name="array[defects]">
								<span class="switch-slider"></span>
							</label>
						</div>
				</div>
										
				<div id="description_defects" class="form-group row" style="display: none;">
					<label for="array[description_defects]" class="col-sm-1 col-form-label">Description defects</label>
						<div class="col-sm-10">
							<textarea rows="10" class="form-control" id="array[description_defects]" placeholder="Description defects" name="array[description_defects]"></textarea>
						</div>
				</div>
				
				<hr style="background-color: #20a8d8;">
				
				<div class="container text-center" >
					<label for="restoration" class="col-sm-3 col-form-label">Реставрация</label>
						<div class="container text-center">
							<label class="switch switch-pill switch-primary">
								<input type="checkbox" class="switch-input" id="restoration" name="array[restoration]">
								<span class="switch-slider"></span>
							</label>
						</div>
				</div>
				
				<div id="description_restoration" class="form-group row" style="display: none;">
					<label for="array[description_restoration]" class="col-sm-1 col-form-label">Description restoration</label>
						<div class="col-sm-10">
							<textarea rows="10" class="form-control" id="array[description_restoration]" placeholder="Description restoration" name="array[description_restoration]"></textarea>
						</div>
				</div>
				
				<hr style="background-color: #20a8d8;">
				
				<div class="container">
					<button type="submit" class="btn btn-primary">Sign in</button>
				</div>
			</div>
		</form>
	</div>
</div>

<script>

	$('#defects').on('click', function(){
		if($('#defects').is(':checked')){
			$('#description_defects').css('display','flex');
		}else{
			$('#description_defects').css('display','none');
		}
	});
	
	$('#restoration').on('click', function(){
		if($('#restoration').is(':checked')){
			$('#description_restoration').css('display','flex');
		}else{
			$('#description_restoration').css('display','none');
		}
	});
	

</script>
@endsection

