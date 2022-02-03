@extends('admin.master')
@section('content')

<h3> User Details </h3>

<p>                        
    <img src="{{url('/uploads/'.$user->image)}}" width="100px" alt="">
</p>
<p>User Name:{{$user->name}} </p>
<p> Date:{{$user->date}} </p>

@endsection