@extends('backend.layouts.app')

@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
  <article class="content">
    <div class="title-block">
      <h3 class="title"> Projects </h3>
			<a href="{{route('Project.create')}}"><input class="btn btn-pill-right btn-primary" type="button" value="new project"></a>
    </div>
		<section class="section">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-block">
							<div class="card-title-block">
								<h3 class="title">all yours Projects </h3>
							</div>
							<section class="section">
								<table class="table">
                  <thead>
                    <tr>
                      <th>Name</th>
											<th>Description</th>
											<th>Task</th>
											<th>Status</th>
											<th>Date start</th>
											<th>Date end</th>
											<th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
									@foreach($projects as $item)
                    <tr>
                      <td>{{$item->name}}</td>
											<td>{{$item->description}}</td>
											<td>{{$item->countTask}}</td>
											<td>{{$item->status_id}}</td>
											<td>{{$item->dateStart}}</td>
											<td>{{$item->dateEnd}}</td>
											<td>
												<div class="row">
													<div class="col-1">
														<a href="{{route('Project.show', $item->id)}}"><i class="fa fa-info"></i></a>
													</div>
													<div class="col-1">
														<a href="{{route('Project.edit', $item->id)}}"><i class="fa fa-pencil"></i></a>
													</div>
													<div class="col-1">
													<form id="form{{$item->id}}" action="{{route('Project.destroy', $item->id)}}" method="post">
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
								<h3 class="title">Stats Project</h3>
							</div>
							<section class="section">
								<div class="col-md-12  stats">
									<div class="col-md-12">
										<div class="col-12 col-sm-12  stat-col">
                      <div class="stat-icon">
                        <i class="fa fa-line-chart"></i>
                      </div>
                      <div class="stat">
												<div class="value">{{$totalProject}}</div>
												<div class="name"> Total project </div>
                      </div>
                    </div>
									</div>
									<div class="col-md-12">
										<div class="col-12 col-sm-12  stat-col">
                      <div class="stat-icon">
                        <i class="fa fa-line-chart"></i>
                      </div>
                      <div class="stat">
												<div class="value">{{$totalTask}}<div>
												<div class="name"> Total Task </div>
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