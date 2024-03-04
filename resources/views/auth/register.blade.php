<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-image: url('/images/dresses.jpg'); 
            background-size: cover;
        }
        .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        border-radius: 4px;
        background-color: #f8f8f8;
    }
        .custom-file-upload:hover {
            background-color:red;
        }
        .login-btn{
            text-align:center;
            text-decoration:none;
          
        }
    
    </style>
</head>
<body>
    <div class="container">
        <h2>COMPLETE PRODUCT INFORMATION</h2>
        @if(session()->has('message'))
        <h2 style="color:green;">{{session('message')}}</h2>
        @endif
        <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
                <div style="color: red; margin-bottom: 10px;">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    
                </div>
            @endif

          
            <div class="form-group">
                <label for="product_name">Enter product name</label>
                <input id="product_name" type="text" name="product_name" required autofocus>
            </div>

            <div class="form-group">
                <label for="price">Product price</label>
                <input id="price" type="text" name="price"  required>
            </div>

           <input id="user_image" type="file" name="user_image" />
            <button type="submit">Post product</button>
            <br><br><div class="login-btn"><a  href="{{ route('admin') }}">DISPLAY</a></div>
        </form>
    </div>
</body>
</html>
