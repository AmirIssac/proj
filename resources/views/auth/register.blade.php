

<html>
<!-- -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/csslogin.css')}}">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<title> Login </title>
</head>
<body>
<header>
	<div class="logo"> <h3>Logo</h3> </div>
	<div class="head"><h1>Register</h1></div>
</header>
<nav>
	<ul>
		<li> <a href="{{route('home')}}"> Home <i class='fas fa-landmark' style='font-size:24px'></i></a></li>
		<li> <a href="{{route('category.index')}}">Categories <i class='fas fa-stream' style='font-size:24px'></i></a></li>
		<li> <a href="#">Contact <i class='fas fa-phone' style='font-size:24px'></i></a></li>
	</ul>
</nav>


<div class="main">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                           <div>
                            <label>Name</label>
                            <i class="fa fa-address-book-o" style="font-size:18px"></i>
</div>
                        
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
            <div>

                            <label>E-Mail Address</label>
                            <i class="fa fa-envelope-o" style="font-size:18px"></i>
</div>
                        
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                    <div>
                            <label>Password</label>
                            <i class="fa fa-key" style="font-size:18px"></i>
</div>
                    
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        
        

                    
                            <label>Confirm Password</label>

                        
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            
                        

                        
                    
                                <button style="margin-top : 20px;" type="submit">
                                    Register
                                </button>
                        
                
                    </form>
                    </div>

<script src="jquery-3.4.1.min.js"></script>
	<script src="java1.js"></script></body>
</body>
</html>
                

