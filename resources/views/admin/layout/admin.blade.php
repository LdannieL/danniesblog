<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dannie's Admin Panel</title>
	{!! HTML::style('css/admin.css') !!}
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head> 
<body>
	<nav class="navbar navbar-default">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="#">Dannie's Blog</a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	            <ul class="nav navbar-nav">
	                <li class="active"><a href="#">Home</a></li>
	                <li><a href="#about">About</a></li>
	                <li><a href="#contact">Contact</a></li>
	            </ul>
	        </div><!--/.nav-collapse -->
	    </div>
	</nav>
	<header>
		<div class="container">
			<h1>Dannie's Admin Panel</h1>
		</div>
	</header>
	<main class="container">
		@yield('content')
	</main>
	<footer>
			<div class="container">
				&copy; {{ date('Y')}} TechnicalWebServices
			</div>
		</footer>	
</body>
</html>