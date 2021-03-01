<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete User</title>
</head>
<body>
   
        @csrf
         
                <legend>Delete list</legend>
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
                    <tr>
                        <td>
                            <h3>Are you Sure..?</h3>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                            <form method="post">
                                @csrf
                                <input type="submit" name="submit" value="Confirm">
                            </form>
            
                        </td>
                    </tr>
                </table>
            
        
        
</body>
</html>