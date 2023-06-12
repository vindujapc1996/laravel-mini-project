@extends('layout.index2')
@section('content')
@if(session('success'))
<div class="alert alert-success">
    {!!session('success')!!}
</div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col-22 mt-9">
                <center>
            <table class="table table-dark table-striped ">
        <tr>
            <th>name</th>
            <th>email</th>
            <th>username</th>
            <th>type</th>
            <th>image</th>

           <th col-span="2">action</th>
           <th></th>
            
        </tr>
        @foreach($view as $views)
<tr>
    <td>{{$views->name}}</td>
    <td>{{$views->email}}</td>
    <td>{{$views->username}}</td>
    <td>{{$views->type}}</td>
    <td><img src="{{asset('storage/images/'.$views->image)}}" alt="" width="55" height="55"></td> 
    <td><a href="{{route('staffedit',$views->id)}}" class="btn btn-primary">edit</a></td>
    <td><a href="{{route('staffdelete',$views->id)}}" class="btn btn-danger">delete</a></td>
   </tr>
@endforeach
</table>
</center>

            </div>
        </div>
    </div>
    

    
@endsection