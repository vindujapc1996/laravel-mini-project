@extends('layout.index2')
@section('content')
<div class="container" style="width:500px;">
<form action="{{route('register')}}" method="post" enctype="multipart/form-data">
    @csrf
    <h3>Registration form</h3>
    <br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>
  
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" required><br><br>
  
  
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required><br><br>
  
  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required><br><br>
  
  <label for="type">type:</label>
  <input type="text" id="type" name="type" required><br><br>
  
  
  <label for="image">Image:</label>
  <input type="file" id="image" name="image"  required><br><br>
  
  <input type="submit" name="submit" value="Register">
</form>
</div>
@endsection