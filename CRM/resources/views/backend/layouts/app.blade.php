<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>dashboard</title>
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Styles -->
		<link href="{{ asset('backend/css/vendor.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
			    <!-- Scripts -->
					
		<script src="{{ asset('backend/js/vendor.js') }}" defer></script>
    <script src="{{ asset('backend/js/app.js') }}" defer></script>
		
</head>

<body>
	<div class="main-wrapper">
		<div class="app" id="app">
			@include('backend.layouts.include.header')
			@include('backend.layouts.include.aside')
			
			@yield('content')
			
			@include('backend.layouts.include.footer')
			
			@yield('modal')
			
			@stack('script')
		</div>
	</div>
	        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>


</body>

</html>