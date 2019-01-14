@extends('backend.layouts.app')


@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
<div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
<div class="mobile-menu-handle"></div>
<article class="content">
	<section class="section">
		<div class="d-flex justify-content-center">
			<div class="col-md-8">
        <div class="card card-block sameheight-item">
          <form role="form" method="POST" action="{{route('Project.store')}}">
					@csrf
						<div class="d-flex justify-content-center">
							<h4>Basic information</h4>
						</div>
						<hr style="background-color: #52bcd3;">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" class="form-control underlined" name="data[name]">
						</div>
						<div class="form-group">
							<label class="control-label">description</label>
							<textarea rows="4" class="form-control underlined" name="data[description]"></textarea>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Counterparty</label>
									<select class="form-control" name="data[counterparty_id]">
											<option value="0">shoes...</option>
										@foreach($counterparty as $item)
											<option value="{{$item->id}}">{{$item->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Date Start</label>
									<input type="datetime-local" class="form-control" name="data[dateStart]">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label class="control-label">Date End</label>
									<input type="datetime-local" class="form-control" name="data[dateEnd]">
								</div>
							</div>
						</div>
						<hr style="background-color: #52bcd3;">
						<div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
			</div>
		</div>
	</section>
</article>
@endsection