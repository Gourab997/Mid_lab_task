<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
            <fieldset>
                <legend>Edit User {{ $user['u_id'] }}</legend>
                <table>
                    <tr>
                        <td>username</td>
                        <td><input type="text" name="username" value="{{ $user['username'] }}"></td>
                    </tr>
                    <tr>
                        <td>name</td>
                        <td><input type="text" name="name" value="{{ $user['name'] }}"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password" value="{{ $user['password'] }}"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" value="{{ $user['email'] }}"></td>
                    </tr>
                    <tr>
                        <td>Type</td>
                        <td>
                            <select name="type">
                                <option value="admin" @if($user['type'] == 'admin') selected @endif> Admin </option>
                                <option value="user" @if($user['type'] == 'user') selected @endif> User</option> 
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><input type="submit" name="update" value="update"></td>
                       
                    </tr>
                </table>
            </fieldset>
        
        </form> 
</body>
</html>