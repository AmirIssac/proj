
<html>
<!-- -->
<head>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/csslogin.css')}}">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<title> Login </title>
</head>
<body>
<header>
	<div class="logo"> <h3>Logo</h3> </div>
	<div class="head"><h1>Login</h1></div>
</header>
<nav>
	<ul>
		<li> <a href="{{route('home')}}"> Home <i class='fas fa-landmark' style='font-size:24px'></i></a></li>
		<li> <a href="{{route('category.index')}}">Categories <i class='fas fa-stream' style='font-size:24px'></i></a></li>
		<li> <a href="#">Contact <i class='fas fa-phone' style='font-size:24px'></i></a></li>
	</ul>
</nav>
<div class="main">
    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
<div>
                            <label>E-Mail Address</label>
                            <i class="fa fa-envelope-o" style="font-size:18px"></i>
</div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                        <div>
                            <label> Password</label>
                            <i class="fa fa-key" style="font-size:18px"></i>

</div>
                        
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        

                        
                              <div class="remember">
                                
                                    <input  style="margin-top : 6px;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="margin-left : 10px;">
                                        Remember Me
                                    </label>
</div>
                                
                            
                        

                
                            
                                <button style="margin-top : 20px;" type="submit">
                                    Login
                                </button>

                                @if (Route::has('password.request'))
                                    <a  href="{{ route('password.request') }}">
                                    Forgot Your Password
                                    </a>
                                @endif
                            
                    </form>

</div>

<script src="jquery-3.4.1.min.js"></script>
	<script src="java1.js"></script></body>
</body>
</html>
