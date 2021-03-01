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
                        <td>username</td>
                        <td><input type="text" name="username" value="{{ old('username') }}">
                        <span style="color:rgba(158, 152, 219, 0.267)"> @error('username')
                            {{ $message }}
                        @enderror</span>
                    </td>
                </tr>
                    <tr>
                        <td>name</td>
                        <td><input type="text" name="name" value=""></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="{{ old('password') }}">
                            <span style="color:rgba(86, 89, 240, 0.863)"> @error('password')
                                {{ $message }}
                            @enderror</span></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value=""></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>
                            <select name="type">
                                <option value="admin" style="color:rgba(64, 189, 238, 0.863)"> Admin </option>
                                <option value="user"> User</option> 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="submit" value="submit"></td>
                       
                    </tr>
                </table>
            </fieldset>
        
        </form> 
{{-- @foreach ($errors->all() as $err)
<li>{{ $err }} </li>    
@endforeach --}}

</body>
</html>