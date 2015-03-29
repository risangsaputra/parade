<!-- app/views/nerds/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Parade pelatihan CRUD</title>
    <link rel="stylesheet" href="../../public/css/bootstrap.css">
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
 <h3 class="text-center"><img src="../../public/images/laravel-logo-white.png" width="100px" class="logo-right"></a>LARAVEL 4.2 RSS</h3>
 <div class="col-md-5 col-md-offset-3">
<h1>Edit {{ $crud->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($crud, array('route' => array('cruds.update', $crud->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', null, array('class' => 'form-control')) }}
        
    </div>

     <div class="form-group">
        {{ Form::label('password', 'password') }}

       
       {{ Form::password('password',null,array('class' => 'form-control')) }}
        
     
    </div>

    <div class="form-group">
        {{ Form::label('level_user', 'level user') }}
       
  
        {{ Form::select('level_user', array(' ' => 'Select a Level', 'admin' => 'admin', 'user' => 'user', 'pelanggan' => 'pelanggan'), null,array('class' => 'form-control')) }}
    
    </div>

    {{ Form::submit('Update!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</div>
</div>
</body>
</html>