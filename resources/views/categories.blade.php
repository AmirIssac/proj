<html>
<!-- -->
<head>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/csscat.css')}}">
			<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<title> Categories </title>
</head>
<body>
<header>
	<div class="head"><h1>Categories</h1></div>
</header>
<nav>
	<ul>
		<li> <a href="{{route('home')}}"> Home <i class='fas fa-landmark' style='font-size:24px'></i></a></li>
		<li> <a href="{{route('category.index')}}">Categories <i class='fas fa-stream' style='font-size:24px'></i></a></li>
		<li> <a href="#">Contact <i class='fas fa-phone' style='font-size:24px'></i></a></li>
	</ul>
</nav>

<main>
	@foreach ($categories as $category)
	<a href="#"><img src="{{asset('storage/'.$category->image)}}"  width="200px" height="200px"></a>
	@endforeach
</main>
	</body>
</html>