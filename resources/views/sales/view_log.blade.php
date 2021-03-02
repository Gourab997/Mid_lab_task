<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <form action="create" method="POST">
    @csrf
    <a href='/pdf'>Create Pdf</a>
            <fieldset>
                <legend>User list</legend>
                <a href="/customer/userlist"> Back </a>
                <table>
                    <tr>
                        <td>Custome_name:</td>
                        <td>{{ $user['Custome_name'] }}</td>
                    </tr>
                    <tr>
                        <td>phone:</td>
                        <td>{{ $user['phone'] }}</td>
                    </tr>
                    <tr>
                        <td>Address :</td>
                        <td>{{ $user['Address'] }}</td>
                    </tr>
                    <tr>
                        <td>product_id :</td>
                        <td>{{ $user['product_id'] }}</td>
                    </tr>
                    <tr>
                        <td >product_name:</td>
                        <td>{{ $user['product_name'] }}</td>
                    </tr>
                    <tr>
                        <td >unit_price:</td>
                        <td>{{ $user['unit_price'] }}</td>
                    </tr>
                    <tr>
                        <td >Quantity:</td>
                        <td>{{ $user['quantity'] }}</td>
                    </tr>
                    <tr>
                        <td >Payment Type:</td>
                        <td>{{ $user['Payment Type'] }}</td>
                    </tr>
                </table>
            </fieldset>
    </form>
</body>
</html>