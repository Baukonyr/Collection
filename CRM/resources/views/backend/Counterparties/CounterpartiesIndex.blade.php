@extends('backend.layouts.app')


@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
  <article class="content">
    <div class="title-block">
      <h3 class="title"> Counterparties </h3>
			<a href="{{route('Counterparty.create')}}"><input class="btn btn-pill-right btn-primary" type="button" value="new counterparties"></a>
    </div>
		<section class="section">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-block">
							<div class="card-title-block">
								<h3 class="title">all yours Counterparties </h3>
							</div>
							<section class="section">
								<table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
											<th>Comments</th>
                      <th>Project</th>
                      <th>Task</th>
											<th>status</th>
											<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
									@foreach($array as $item)
                    <tr>
                      <td>{{$item->name}}</td>
											<td>{{$item->comments}}</td>
                      <td>...</td>
                      <td>...</td>
											<td>{{$item->status_id}}</td>
											<td>
												<div class="row">
													<div class="col-1">
														<a href="{{route('Counterparty.show', $item->id)}}"><i class="fa fa-info"></i></a>
													</div>
													<div class="col-1">
														<a href="{{route('Counterparty.edit', $item->id)}}"><i class="fa fa-pencil"></i></a>
													</div>
													<div class="col-1">
													<form id="form{{$item->id}}" action="{{route('Counterparty.destroy', $item->id)}}" method="post">
														<a href="javascript:;"  onclick="document.getElementById('form{{$item->id}}').submit();"><i class="fa fa-trash"></i></a>
														    {!! method_field('delete') !!}
																{!! csrf_field() !!}
													</form>
													</div>
												</div>
											</td>
                    </tr>
									@endforeach
                  </tbody>
                </table>
							</section>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-block">
							<div class="card-title-block">
								<h3 class="title">All stats Counterparties</h3>
							</div>
							<section class="section">
																<div class="col-md-12  stats">
																						<div class="col-md-12">
											                                            <div class="col-12 col-sm-12  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-line-chart"></i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value"> $80.560 </div>
                                                    <div class="name"> Monthly income </div>
                                                </div>
                                                <div class="progress stat-progress">
                                                   <div class="progress-bar" style="width: 60%;"></div>
                                                </div>
                                            </div>
										</div>
																																<div class="col-md-12">
											                                            <div class="col-12 col-sm-12  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-line-chart"></i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value"> $80.560 </div>
                                                    <div class="name"> Monthly income </div>
                                                </div>
                                                <div class="progress stat-progress">
                                                   <div class="progress-bar" style="width: 60%;"></div>
                                                </div>
                                            </div>
										</div>
																																<div class="col-md-12">
											                                            <div class="col-12 col-sm-12  stat-col">
                                                <div class="stat-icon">
                                                    <i class="fa fa-line-chart"></i>
                                                </div>
                                                <div class="stat">
                                                    <div class="value"> $80.560 </div>
                                                    <div class="name"> Monthly income </div>
                                                </div>
                                                <div class="progress stat-progress">
                                                   <div class="progress-bar" style="width: 60%;"></div>
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