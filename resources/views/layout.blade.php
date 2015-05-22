<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
       <title>PBSB ONLINE</title>
       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" media="screen" charset="utf-8"/>
</head>

<body>
	<div class="container">
		@if(Session::has('flash_text'))
			<div class="alert alert-success">{{Session::get('flash_text')}}</div>
		@endif
		
		@yield('content')
	</div>
</body>

</html>