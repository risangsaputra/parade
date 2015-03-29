<!-- app/views/nerds/show.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Parade pelatihan CRUD</title>
    <link rel="stylesheet" href="../public/css/bootstrap.css">
</head>
<body>
<div class="container ">

<nav class="navbar navbar-default">
    <div class="navbar-header">
        <a class="navbar-brand " href="{{ URL::to('cruds') }}">PINGUIN</a>
    </div>
    <ul class="nav navbar-nav">
    <!-- menu header navnya -->
    </ul>
</nav>
 <h3 class="text-center"><img src="../public/images/laravel-logo-white.png" width="100px" class="logo-right"></a>LARAVEL 4.2 RSS</h3>

 <div class="col-md-6 col-md-offset-3">
 <p><a href="{{ URL::to('cruds') }}" class="btn btn-primary btn-sm"><- Back</a></p> 
<div class="jumbotron ">
<h2 class="text-center">Data Crud</h2><legend></legend>
    <strong><h3>My name Is :</strong> {{ $crud->name}}</h3>
    <strong><h4>email      :</strong> {{ $crud->email}}</h4>
    <strong><h4>username   :</strong> {{ $crud->username}}</h4>
    <strong><h4>level      :</strong> {{ $crud->level_user}}</h4>
</div>



</div>

</div>
</body>
</html>