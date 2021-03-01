<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1>Login Page</h1>

	
		<form action="login" method="POST">
    @csrf
		<fieldset>
			<legend>Login</legend>
			<table>
            

          
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{ old('email') }}" ><span style="color:rgba(86, 89, 240, 0.863)"> @error('email')
						{{ $message }}
					@enderror</span>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{ old('password') }}>  <span style="color:rgba(86, 89, 240, 0.863)"> @error('password')
						{{ $message }}
					@enderror</span></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Submit"></td>
					<td></td>
				</tr>
			</table>
		</fieldset>
	
	</form>
	{{ session('msg') }}
</body>
</html>