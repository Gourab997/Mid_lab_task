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
                <a href="/customer/userlist"> Back </a>
                <table>
                    <tr>
                        <td>fullname:</td>
                        <td>{{ $user['fullname'] }}</td>
                    </tr>
                    <tr>
                        <td>username:</td>
                        <td>{{ $user['username'] }}</td>
                    </tr>
                    <tr>
                        <td>phone :</td>
                        <td>{{ $user['phone'] }}</td>
                    </tr>
                    <tr>
                        <td>password :</td>
                        <td>{{ $user['password'] }}</td>
                    </tr>
                    <tr>
                        <td >email:</td>
                        <td>{{ $user['email'] }}</td>
                    </tr>
                    <tr>
                        <td >Company Nam:</td>
                        <td>{{ $user['cname'] }}</td>
                    </tr>
                    <tr>
                        <td >City:</td>
                        <td>{{ $user['city'] }}</td>
                    </tr>
                    <tr>
                        <td >country:</td>
                        <td>{{ $user['country'] }}</td>
                    </tr>
                </table>
            </fieldset>
        
        </form> 
</body>
</html>