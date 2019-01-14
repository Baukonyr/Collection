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
          <form role="form" method="POST" action="{{route('Counterparty.store')}}">
					@csrf
						<div class="d-flex justify-content-center">
							<h4>Basic information</h4>
						</div>
						<hr style="background-color: #52bcd3;">
						<div class="form-group">
							<label class="control-label">Name</label>
							<input type="text" class="form-control underlined" name="data[data][name]" value="{{$object->name}}">
						</div>
						<div class="form-group">
							<label class="control-label">Comments</label>
							<textarea rows="4" class="form-control underlined" name="data[data][comments]">{{$object->comments}}</textarea>
						</div>
						<div class="d-flex justify-content-center">
							<h4>Address</h4>
						</div>
						<hr style="background-color: #52bcd3;">
						<div class="form-group">
							<div class="row">
								<div class="col-md-4">
									<label class="control-label">Country</label>
									<input type="text" class="form-control underlined" name="data[address][country]" value="{{$object->address->country}}">
								</div>
								<div class="col-md-4">
									<label class="control-label">Region</label>
									<input type="text" class="form-control underlined" name="data[address][region]" value="{{$object->address->region}}">
								</div>
								<div class="col-md-4">
									<label class="control-label">City</label>
									<input type="text" class="form-control underlined" name="data[address][city]" value="{{$object->address->city}}">
								</div>
							</div>
						</div>
						
						<div class="form-group">
							<div class="row">
								<div class="col-md-1">
									<label class="control-label">type</label>
									<input type="text" class="form-control underlined" name="data[address][type]" value="{{$object->address->type}}">
								</div>
								<div class="col-md-8">
									<label class="control-label">Name</label>
									<input type="text" class="form-control underlined" name="data[address][name]" value="{{$object->address->name}}">
								</div>
								<div class="col-md-1">
									<label class="control-label">block</label>
									<input type="text" class="form-control underlined" name="data[address][block]" value="{{$object->address->block}}">
								</div>
								<div class="col-md-1">
									<label class="control-label">number</label>
									<input type="text" class="form-control underlined" name="data[address][number]" value="{{$object->address->number}}">
								</div>
								<div class="col-md-1">
									<label class="control-label">room</label>
									<input type="text" class="form-control underlined" name="data[address][room]" value="{{$object->address->room}}">
								</div>
							</div>
						</div>
						<div class="d-flex justify-content-center">
							<h4>Contact</h4>
						</div>
						<hr style="background-color: #52bcd3;">
						<div class="row">
							<div class="col-4">
								<div class="form-group">
									<span class="fa fa-skype"></span>
									<label class="control-label">Skype</label>
									<input type="text" class="form-control underlined" name="data[contact][1][]">
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<span class="fa fa-phone"></span>
									<label class="control-label">Phone</label>
									<input type="tel" class="form-control underlined" name="data[contact][2][]" placeholder="38-011-111-11-11" pattern="[0-9]{2}-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}"> 
								</div>
							</div>
							<div class="col-4">
								<div class="form-group">
									<span class="fa fa-envelope"></span>
									<label class="control-label">Email</label>
									<input type="email" class="form-control underlined" placeholder="someEmail@gmail.com" name="data[contact][3][]">
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