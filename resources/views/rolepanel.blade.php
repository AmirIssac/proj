<html>
<!-- -->
<head>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/csspanel.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title> Control Panel </title>
</head>
<body>
<header>
	<div class="logo"> <h3>Logo</h3> </div>
	<div class="head"><h1>All users</h1></div>
</header>
<nav>
	<ul>
		<li> <a href="{{route('home')}}"> Home <i class='fas fa-landmark' style='font-size:24px'></i></a></li>
		<li> <a href="{{route('category.index')}}">Categories <i class='fas fa-stream' style='font-size:24px'></i></a></li>
		<li> <a href="#">Contact <i class='fas fa-phone' style='font-size:24px'></i></a></li>
	</ul>
</nav>
<div class="main">
@foreach($users as $user)
@if($user->role == 'user')
<div style="margin-top:10px" class="usrrow">
<img src="{{asset('storage/'.$user->profile->image)}}" class="imgpro" width="100vh" height="100vh">
<div class="pararow">
    {{$user->email}}
   <form action="{{route('mkadmin' , $user->id)}}" method="POST">
       @csrf
       @if(isset($user))
       @method('PUT')
       @endif
   <button class="makeadmin" type="submit"> Make Admin </button>
</form>
</div>
</div>
@endif
@endforeach
</div>


<script src="jquery-3.4.1.min.js"></script>
	<script src="java1.js"></script></body>
</body>
</html>