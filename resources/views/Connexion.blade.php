<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style3.css">
    <title>Document</title>
</head>
@include('Navbar')
<body>
    <br><br>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		
	</div>
	<div class="form-container sign-in-container">
		<form method="POST" action="{{ route('connexion') }}">
			@csrf
            <br><br><br><br><br>
			<h1>Sign in</h1>
            <br><br>
			
			<input type="email" name="email" placeholder="Email" value="{{ old('email') }}"/>
			@error('email')
				<span class="text-danger">{{$message}}</span>
			@enderror
            <br>
			<input type="password" name="password" placeholder="Mot De Pass" />
            <br>
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
            <br><br><br><br><br>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bienvenue!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp"><a href="{{ route('Inscription') }}">Sign In</a></button>
			</div>
		</div>
	</div>
</div>
<br><br><br><br><br>
<footer>
	<p>
        <a href="/">	 Qatra Maroc        </a>
	</p>
</footer>
<script>

</script>

</body>

</html>
