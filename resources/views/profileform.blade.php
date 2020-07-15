<html>
<!-- -->
<head>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/cssform.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title> edit Profile </title>
</head>
<body>
<header>
	<div class="logo"> <h3>Logo</h3> </div>
	<div class="head"><h1>edit Profile</h1></div>
</header>
<nav>
	<ul>
		<li> <a href="{{route('home')}}"> Home <i class='fas fa-landmark' style='font-size:24px'></i></a></li>
		<li> <a href="{{route('category.index')}}">Categories <i class='fas fa-stream' style='font-size:24px'></i></a></li>
		<li> <a href="#">Contact <i class='fas fa-phone' style='font-size:24px'></i></a></li>
	</ul>
</nav>

<div class="main">

<form style="margin-top:50px;" class="proform" action="{{route('profile.update' , $pro->profile->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PUT')
<label>  Name </label>
<input type="text" name="name"/>
<label> Age </label>
<input type="number" name="age"/>
<label>  Male </label>
<input type="radio" name="gender" value="male">
<label>  Female </label>
<input type="radio" name="gender" value="female">
<label>  Phone </label>
<input type="text" name="phone"/>
<label>  Address </label>
<input type="text" name="address"/>
<label>  Image </label>
<input type="file" name="image"/>
<button style="margin-top:20px;" type="submit"> edit </button>
</form>

</div>

<script src="jquery-3.4.1.min.js"></script>
	<script src="java1.js"></script></body>
</body>
</html>