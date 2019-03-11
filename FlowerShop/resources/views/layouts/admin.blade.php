<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Document</title>
</head>
<body>
  <nav class="nav justify-content-center">
    <a class="nav-link " href="{{route('index')}}">Go to Shop</a>
    <a class="nav-link " href="{{route('admin.home')}}">Home</a>
    <a class="nav-link " href="{{route('admin.create')}}">Add</a>
    <a class="nav-link " href="{{route('admin.modify')}}">Modify</a>
  </nav>
@yield('section')    
</body>
</html>