<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       	<title>
	@section('title_page')
	  | Laravel  CRUD AJAX
	@show
	</title>
	@include('admin.includes._begin')
    </head>
    <body>
        <div class="container">
        	@yield('content')
        </div>
    
    	@include('admin.includes._end')
    </body>
</html>