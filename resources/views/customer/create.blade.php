<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <form action="create" method="POST">
        @csrf
            <fieldset>
                <legend>Create User</legend>
                <table>
                    <tr>
                        <td>Full name</td>
                        <td><input type="text" name="fullname" value="{{ old('fullname') }}">
                        <span style="color:rgba(158, 152, 219, 0.267)"> @error('fullname')
                            {{ $message }}
                        @enderror</span>
                    </td>

                    <tr>
                        <td>username</td>
                        <td><input type="text" name="username" value="{{ old('username') }}">
                        <span style="color:rgba(158, 152, 219, 0.267)"> @error('username')
                            {{ $message }}
                        @enderror</span>
                    </td>
                </tr>
                    <tr>
                        <td>Phone</td>
                        <td><input type="text" name="phone" value="{{ old('phone') }}">
                            <span style="color:rgba(86, 89, 240, 0.863)"> @error('phone')
                                {{ $message }}
                            @enderror</span>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="{{ old('password') }}">
                            <span style="color:rgba(86, 89, 240, 0.863)"> @error('password')
                                {{ $message }}
                            @enderror</span></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="cpassword" value="">
                            
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="{{ old('email') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('email')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="{{ old('email') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('email')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>
                  
                    <tr>
                        <td>Company Name</td>
                        <td><input type="text" name="cname" value="{{ old('cname') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('cname')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td><input type="text" name="city" value="{{ old('city') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('city')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>

                    <tr>
                        <td>Country</td>
                        <td><input type="text" name="country" value="{{ old('country') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('country')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>                    
                    <tr>
                        <td><input type="submit" name="submit" value="submit"></td>
                       
                    </tr>
                </table>
            </fieldset>
        
        </form> 


</body>
</html>