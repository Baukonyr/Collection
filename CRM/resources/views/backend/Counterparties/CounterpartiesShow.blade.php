@extends('backend.layouts.app')


@section('content')
	<div class="sidebar-overlay" id="sidebar-overlay"></div>
	<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
	<div class="mobile-menu-handle"></div>
		<article class="content">
			<div class="title-block">
				<h3 class="title">Data counterparty</h3>
				<a href="{{route('Counterparty.index')}}"><i class="fa fa-arrow-circle-left"></i></a>
			</div>
			<section class="section">
				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-block">
								<div class="card-title-block">
									<h3 class="title">Card counterparty: {{$object->name}}</h3>
								</div>
								<section class="section">
									<p class="lead">{{$object->comments}}</p>
										<address>          
                      <br>{{$object->address->type}}. {{$object->address->name}} {{$object->address->number}}{{$object->address->block}}, Room {{$object->address->room}}
                      <br>{{$object->address->city}}, {{$object->address->country}}. {{$object->address->region}}
                      <br>
										</address>
										<address>
											@foreach($object->contact as $contact)
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
					<div class="col-md-6">
						<div class="card">
							<div class="card-block">
								<div class="card-title-block">
									<h3 class="title">Counterparty stats</h3>
								</div>
								<section class="section">
									<div class="col-md-12  stats">
										<div class="row">
											<div class="col-md-6">
												<div class="col-md-12">
											    <div class="col-12 col-sm-12  stat-col">
                            <div class="stat-icon">
                              <i class="fa fa-suitcase"></i>
                            </div>
                            <div class="stat">
                              <div class="value"></div>
                              <div class="name"> Проектов </div>
                            </div>

                          </div>
												</div>
												<div class="col-md-12">
											    <div class="col-12 col-sm-12  stat-col">
                            <div class="stat-icon">
                              <i class="fa fa-book"></i>
                            </div>
                            <div class="stat">
                              <div class="value"></div>
															<div class="name"> Заданий </div>
                            </div>
                          </div>
												</div>
											</div>
											<div class="col-md-6">
												<div class="col-md-12">
													<div class="col-12 col-sm-12  stat-col">
                            <div class="stat-icon">
															<i class="fa fa-money"></i>
                            </div>
                            <div class="stat">
                              <div class="value"></div>
                              <div class="name"> Сумма </div>
                            </div>                 
                          </div>
												</div>
												<div class="col-md-12">
											    <div class="col-12 col-sm-12  stat-col">
                            <div class="stat-icon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="stat">
                              <div class="value"></div>
                              <div class="name"> Рабочее время </div>
                            </div>
                          </div>
												</div>
											</div>
										</div>
									</div>
								</section>
							</div>
						</div>
					</div>
				</div>
			</section>
		</article>
@endsection