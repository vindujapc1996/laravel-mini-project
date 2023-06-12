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
<form action="{{route('update',$doctor->doctor_id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <h4>Registration form</h4>
    
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="doctor_name" value="{{$doctor->doctor_name}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="specialization">Specialization:</label>
        <input type="text" id="specialization" name="specialization" value="{{$doctor->specialization}}"  class="form-control" required>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{$doctor->email}}" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" value="{{$doctor->contact}}" class="form-control" required>
    </div>

    
<br>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image" value="{{$doctor->image}}"name="image" required>
    </div>
    <br>

    <input type="submit" name="submit" value="update" class="btn btn-primary">
</form>
</div>


  
@endsection