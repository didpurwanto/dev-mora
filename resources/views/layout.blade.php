<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <title>PBSB ONLINE</title>
	   {!! Html::style('css/bootstrap.min.css') !!}
	   @yield('css')
</head>

<body>
	<div class="container">
		@if(Session::has('flash_text'))
			<div class="alert alert-success">{{Session::get('flash_text')}}</div>
		@endif
		
		@yield('content')
	</div>
</body>
	{!! Html::script('js/jquery-1.11.1.min.js', array('type' => 'text/javascript')) !!}
	{!! Html::script('js/bootstrap.min.js', array('type' => 'text/javascript')) !!}
	@yield('script')
</html>