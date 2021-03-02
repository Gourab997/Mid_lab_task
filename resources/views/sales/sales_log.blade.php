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
                        <td>Custome name</td>
                        <td><input type="text" name="Custome_name" value="{{ old('Custome_name') }}">
                        <span style="color:rgba(158, 152, 219, 0.267)"> @error('Custome_name')
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
                        <td>Address</td>
                        <td><input type="text" name="Address" value="{{ old('Address') }}">
                            <span style="color:rgba(86, 89, 240, 0.863)"> @error('Address')
                                {{ $message }}
                            @enderror</span>
                        </td>
                    </tr>
                  
                  
                    <tr>
                        <td>product_id</td>
                        <td><input type="text" name="product_id" value="{{ old('product_id') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('product_id')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>
                    <tr>
                        <td>product_name</td>
                        <td><input type="text" name="product_name" value="{{ old('product_name') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('product_name')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>
                  
                    <tr>
                        <td>unit_price</td>
                        <td><input type="text" name="unit_price" value="{{ old('unit_price') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('unit_price')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>
                    <tr>
                        <td>Quantity</td>
                        <td><input type="text" name="quantity" value="{{ old('quantity') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('quantity')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>

                    <tr>
                        <td>Total Price</td>
                        <td><input type="text" name="total_price" value="{{ old('total_price') }}"> <span style="color:rgba(86, 89, 240, 0.863)"> @error('total_price')
                            {{ $message }}
                        @enderror</span></td>
                    </tr>       
                    <tr>
                        <td>Payment Type</td>
                        <td>
                            <select name="pay_type">
                                <option value="cash" selected > cash </option>
                                <option value="card"  selected > card</option> 
                                <option value="online"  selected > Online</option> 
                            </select>
                        </td>
                    </tr>        
                    <tr>
                        <td><input type="submit" name="submit" value="submit"></td>
                       
                    </tr>
                </table>
            </fieldset>
        
        </form> 


</body>
</html>