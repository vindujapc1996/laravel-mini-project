@extends('layout.index2')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!!session('success')!!}
</div>
@endif


<br>
<br>

<div class="container" style="width:500px;">
<form action="{{route('update',$user->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <h4>Registration form</h4>
    
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$user->name}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">email:</label>
        <input type="text" id="email" name="specialization" value="{{$user->email}}"  class="form-control" required>
    </div>

    <div class="form-group">
        <label for="username">username:</label>
        <input type="username" id="username" name="username" value="{{$user->username}}" class="form-control" required>
    </div>
<br>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image" value="{{$user->image}}"name="image" required>
    </div>
    <br>
    <input type="submit" name="submit" value="update" class="btn btn-primary">

</form>
</div>
  
@endsection