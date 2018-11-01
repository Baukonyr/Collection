@extends('layouts.Backend.app')

@section('content')
<!--
<div class="justify-content-center">
	<div class="border border-primary container col-10">
		<div class="row">
			<div class="col-lg-6" style="background-color:">
				<div class="row">
					<div class="col-6"  style="background-color:">
							<img style="max-width: 200px; max-hight: 200px;" src="{{asset($coin->image)}}" class="bordre border-primary rounded float-left">
					</div>
					<div class="col-6"  style="background-color: green;">
						
					</div>
					
				</div>
			asdasd
			</div>
			<div class="col-lg-6">
			asdasd
			</div>
		</div>
	</div>
</div>
-->
<div class="justify-content-center">
	<div class="border border-primary container col-10">
		<div class="col-12">
			<div class="row">
				<div class="bordre border-primary col-6" style="padding: 10px;">
					<img  style="height: 400px; width: 400px;" src="{{asset($coin->image)}}" class="img-fluid rounded float-left">
				</div>
				<div class="col-6" style="padding: 10px;">
					<div class="col-12">
						<dl class="row">
							<dt class="col-md-3">Name:</dt> <dd class="col-md-9">{{$coin->name}}</dd>
						</dl>
						<dl class="row">
							<dt class="col-md-3">Description:</dt> <dd class="col-md-9">{{$coin->description}}</dd>
						</dl>
						<hr style="background-color: #20a8d8;">
						<dl class="row">
							<dt class="col-md-3">State:</dt> <dd class="col-md-9">{{$coin->state}}</dd>
							<dt class="col-md-3">Year:</dt> <dd class="col-md-9">{{$coin->year}}</dd>
							<dt class="col-md-3">metal:</dt> <dd class="col-md-9">{{$coin->year}}</dd>
						</dl>
						<hr style="background-color: #20a8d8;">
						<dl class="row">
						@if($coin->defects == 1)
							<dt class="col-md-3">Defects:</dt><dd class="col-md-9">Yes</dd>
						@else
							<dt class="col-md-3">Defects:</dt><dd class="col-md-9">No</dd>
						@endif
						@if($coin->restoration == 1)
							<dt class="col-md-3">Restoration:</dt><dd class="col-md-9">Yes</dd>
						@else
							<dt class="col-md-3">Restoration:</dt><dd class="col-md-9">No</dd>
						@endif
						</dl>
						<hr style="background-color: #20a8d8;">
						<dl class="row">
							<dt class="col-md-3">Cost</dt><dd class="col-md-9">{{$coin->presentValue}} $</dd>
						</dl>
					</div>
				</div>
			</div>
		</div>
		@if($coin->defects or $coin->restoration == 1)
		<div class="col-12">
		@if($coin->defects == 1)
			<div class="row col-12">
				<dt class="col-md-3">Defects description:</dt><dd class="col-md-9">{{$coin->description_defects}}</dd>
			</div>
		@endif
		@if($coin->restoration == 1)
			<div class="row col-12">
				<dt class="col-md-3">Restoration description:</dt><dd class="col-md-9">{{$coin->description_restoration}}</dd>
			</div>
		@endif
		</div>
		@endif
	</div>
</div>
@endsection