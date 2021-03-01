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
                <legend>User list</legend>
                <a href="/home/userlist"> Back </a>
                <table>
                    <tr>
                        <td>UserName:</td>
                        <td>{{ $user['username'] }}</td>
                    </tr>
                    <tr>
                        <td>Name:</td>
                        <td>{{ $user['name'] }}</td>
                    </tr>
                    <tr>
                        <td>Password :</td>
                        <td>{{ $user['password'] }}</td>
                    </tr>
                    <tr>
                        <td>Email :</td>
                        <td>{{ $user['email'] }}</td>
                    </tr>
                    <tr>
                        <td >Type:</td>
                        <td>{{ $user['type'] }}</td>
                    </tr>
                    
                </table>
            </fieldset>
        
        </form> 
</body>
</html>