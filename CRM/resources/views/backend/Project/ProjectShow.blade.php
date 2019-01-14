@extends('backend.layouts.app')

@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
	<article class="content">
		<div class="title-block">
			<h3 class="title">Data Project</h3>
			<a href="{{route('Project.index')}}"><i class="fa fa-arrow-circle-left"></i></a>
		</div>
	<section class="section">
		<div class="row">
			<div class="col-md-7">
				<div class="card">
					<div class="card-block">
						<div class="card-title-block">
							<h3 class="title">Card Project: {{$object->name}}</h3>
						</div>
						<section class="section">
						<hr style="background-color: #52bcd3;">
						<h4 class="title">data Project</h4>
							<p class="lead">{{$object->description}}</p>
								{{$object->status_id}}
								</br>
								{{$object->dateEnd}}
						</section>
						
						<section class="section">
							<hr style="background-color: #52bcd3;">
							<div class="card-title-block">
								<h4 class="title">data Counterparty</h4>
							</div>
							<p class="lead">{{$object->counterparty->name}}</p>
							<p class="lead">{{$object->counterparty->comments}}</p>
										<address>          
                      <br>{{$object->counterparty->address->type}}. {{$object->counterparty->address->name}} {{$object->counterparty->address->number}}{{$object->counterparty->address->block}}, Room {{$object->counterparty->address->room}}
                      <br>{{$object->counterparty->address->city}}, {{$object->counterparty->address->country}}. {{$object->counterparty->address->region}}
                      <br>
										</address>
										<address>
											@foreach($object->counterparty->contact as $contact)
												@foreach($contactType as $type)
													@if($contact->type_id == $type->id)
													<div class="row">
														<div class="col-md-12 icon-address">
															<i class="{{$type->iconName}}"></i>
														</div>
														<div class="col-md-12 contact-address">
															{{$contact->value}}
														</div>
													</div>
													@endif
												@endforeach
											@endforeach
										</address>
						</section>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="card-block">
						<div class="card-title-block">
							<h3 class="title">Tasks stats</h3>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-block">
						<div class="card-title-block">
							<h3 class="title">Tasks in work</h3>
						</div>
						<section class="section">
						@foreach($object->activeTask as $item)
							<div class="col-md-12">
							{{$item->name}}
							</div>
						@endforeach
						</section>
					</div>
				</div>
			</div>
			
		</div>
	</section>
</article>
@endsection