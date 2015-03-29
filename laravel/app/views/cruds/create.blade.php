<!-- app/views/nerds/create.blade.php -->

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

 <div class="col-md-5 col-md-offset-3">
<p><a href="{{ URL::to('cruds') }}" class="btn btn-primary btn-sm"><-Back</a></p> 


<!-- if there are creation errors, they will show here -->

<div class="alert alert-danger" role="alert">
{{ HTML::ul($errors->all()) }}
</div>

{{ Form::open(array('url' => 'cruds')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('email', 'Email') }}
        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
    </div>

     <div class="form-group">
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username', Input::old('username'), array('class' => 'form-control')) }}
        
    </div>

     <div class="form-group">
        {{ Form::label('password', 'password') }}

        {{ Form::password('password',array('class' => 'form-control')) }}
     
    </div>

    <div class="form-group">
        {{ Form::label('level_user', 'Level User') }}
          {{ Form::select('level_user', array(' ' => 'Select a Level', 'admin' => 'admin', 'user' => 'user', 'pelanggan' => 'pelanggan'), Input::old('level_user'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Register', array('class' => 'btn btn-danger')) }}

{{ Form::close() }}
</div>
</div>
</body>
</html>