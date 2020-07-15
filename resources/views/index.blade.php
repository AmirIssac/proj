<html>
<!-- -->
<head>
	<meta keywords="htmls",learn, teach "/>
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/css1.css')}}">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<title> Home </title>
</head>
<body>

<header>
	<div class="logo"> <h3>Logo</h3> </div>
	<div class="head"><h1>Welcome to Car Sales</h1></div>
	@if(auth()->user())
	<form action="/logout" method="POST">
	@csrf
	<button type="submit"> Logout </button>
	</form>
	@endif
</header>
<nav>
	<ul>
		<li> <a href="{{route('home')}}"> Home <i class='fas fa-landmark' style='font-size:24px'></i></a></li>
		<li> <a href="{{route('category.index')}}">Categories <i class='fas fa-stream' style='font-size:24px'></i></a></li>
		<li> <a href="#">Contact <i class='fas fa-phone' style='font-size:24px'></i></a></li>
	</ul>
</nav>
<main style="margin-top: 100px;">
	<section class="prim1">
		<div class="paragraph"><h3> بادر بشراء سيارة الاحلام الآن </h3>
		</div>
		@if(! auth()->user())
		<img class="car"src="{{asset('images/car.png')}}" width="200vh" height="200vh">
		@endif
		@if(auth()->user())
		<div class="card">
		<div class="row1pro">
		<a href="{{asset('storage/'.auth()->user()->profile->image)}}"><img src="{{asset('storage/'.auth()->user()->profile->image)}}" class="imgpro" width="100vh" height="100vh"></a>
		@if(auth()->user() && auth()->user()->isAdmin())
			<img class="crown" src="{{asset('images/crown.png')}}" width="20px" height="100px">
			@endif
		<h5 style="margin-top:-2px"> id : {{auth()->user()->profile->id}}</h5>
		</div>
		<div class="row2pro">
		<h4 style="margin-left:5px"> name : {{auth()->user()->profile->name}}</h4>
		<h4> age : {{auth()->user()->profile->age}}</h4>
		<h4> gender : {{auth()->user()->profile->gender}}</h4>
		</div>
		<div class="row3pro">
		<h4 style="margin-left:5px"> phone : {{auth()->user()->profile->phone}}</h4>
		<h4> address : {{auth()->user()->profile->address}}</h4>
		</div>
		<div class="row4pro">
		<a href="{{route('profile.edit' , auth()->user()->id)}}" ><button class="edit"> edit </button></a>
</div>
		</div>
		
		@endif
	</section>
     @if(! auth()->user())
	<div class="prim2">
	<a href="{{ route('login') }}">	<button class="btn1">Login</button> </a>
    <a href="{{ route('register') }}"><button class="btn2">Sign up</button></a>
	</div>
	@endif

	@if(auth()->user() && auth()->user()->isAdmin())
	<div class="prim2">
	<a href="{{ route('panel') }}">	<button class="btn1">Control Panel</button> </a>
	</div>
    @endif

	<img src="{{asset('images/circle.png')}}" class="circ1" width="350vh" height="350vh">
	<img src="{{asset('images/circle.png')}}" class="circ2" width="250vh" height="250vh">
	<img src="{{asset('images/circle.png')}}" class="circ3" width="200vh" height="200vh">

	
</main>
    <script src="jquery-3.4.1.min.js"></script>
	<script src="java1.js"></script></body>
</body>
</html>