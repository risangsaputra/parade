<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Parade pelatihan CRUD</title>
    <link rel="stylesheet" href="public/css/bootstrap.css">
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
 <h3 class="text-center"><img src="public/images/laravel-logo-white.png" width="100px" class="logo-right"></a>LARAVEL 4.2 RSS</h3>
<p><a href="{{ URL::to('cruds/create') }}" class="btn btn-primary btn-sm">Add user</a></p> 


 <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Level User</td>
            <td>Username</td>
            
            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($cruds as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->level_user }}</td>
                <td>{{ $value->username }}</td>
                

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                   {{ Form::open(array('url' => 'cruds/' . $value->id, 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}

                    <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('cruds/' . $value->id) }}">Detail</a>

                    <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('cruds/' . $value->id . '/edit') }}">Edit</a>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
</body>
</html>