<!doctype html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta name="csrf-token" content="{{ csrf_token() }}">
		
		<link rel="stylesheet" href="https://unpkg.com/@coreui/icons/css/coreui-icons.min.css">
		<link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">

				<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
		<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
	</head>
	<body class="app sidebar-show aside-menu-show">

			<div class="app-body">
				<div class="sidebar">
					@include ('backend.includes.sidebar')
				</div>
				<div class="main" style="background-color: white;">
						<div class="navbar navbar-light" style="">
							<button class="navbar-toggler sidebar-toggler" type="button" data-toggle="sidebar-show">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div>
						@yield('content')
				</div>
				@yield('modal')
			</div>
		
		
	
	
	
	
	
	

	</body>
</html>