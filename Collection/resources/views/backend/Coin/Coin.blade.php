@extends('layouts.Backend.app')



@section('content')
	<div class="col-lg-12" style="margin: 2px; padding:10px; ">
		
		
		<a style="" class="btn btn-primary" type="button" href="{{route('coin.create')}}">добавить</a>
		<hr style="background-color: #20a8d8;">
		@if(isset($array_coin))
		<table class="table">
			<thead>
				<tr>
					<th>name</th>
					<th>state</th>
					<th>year</th>
					<th>metal</th>
					<th>defects</th>
					<th>restoration</th>
					<th>cost</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
			@foreach($array_coin as $array)
				<tr>
					<th>{{$array->name}}</th>
					<th>{{$array->state}}</th>
					<th>{{$array->year}}</th>
					<th>{{$array->metal}}</th>
					<th>{{$array->defects}}</th>
					<th>{{$array->restoration}}</th>
					<th>{{$array->cost[0]->costs}}</th>
					<th>
						<div class="row">
							<div class="col-1">
								<a href="{{route('coin.details')}}/{{$array->id}}"><i class="cui-justify-center"></i></a>
							</div>
							<div class="col-1">
								<a href="{{route('coin.edit')}}/{{$array->id}}"><i class="cui-pencil"></i></a>
							</div>
							<div class="col-1">
								<a href="{{route('coin.destroy')}}/{{$array->id}}"><i class="cui-trash"></i></a>
							</div>
						</div>
					</th>
				</tr>
			@endforeach
			</tbody>
		</table>
		@endif
	</div>
@endsection