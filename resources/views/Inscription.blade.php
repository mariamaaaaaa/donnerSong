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

		<form method="POST" action="{{ route('store') }}">
			@csrf
			<h1>Create Account</h1>
            <br><br>
			<input type="text" name="name" placeholder="Name" />
			@error('name')
			<div class="text-danger">{{$message}}</div>
			@enderror
            <br>
			
			<input type="email" name="email" placeholder="Email" />
			@error('email')
			<div class="text-danger">{{$message}}</div>
			@enderror
            <br>

			<input type="password" name="password" placeholder="Password" />
			@error('password')
			<div class="text-danger">{{$message}}</div>
			@enderror
            <br>
			<input type="password" name="password_confirmation" placeholder="confirmation password" />
			@error('password_confirmation')
			<div class="text-danger">{{$message}}</div>
			@enderror
            <br><br>
			<button>Sign Up</button>
		</form>
        <br><br><br>
	</div>
	
			
<footer>
	<p>
        <a href="/">	 Qatra Maroc        </a>
	</p>
</footer>
<script>
    
</script>

</body>

</html>
