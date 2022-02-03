@extends("admin.master")
@section('content')
<h2>User Edit</h2>
<br>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session()->has('success'))
   <p class="alert alert-success">{{session()->get('success')}}</p>
@endif
<form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('put')

  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">User Name</label>
    <input value="{{$user->name}}" name='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
    <label for="exampleInputEmail1" class="form-label">Date</label>
    <input value="{{ $user->date}}" name='date' type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
        <div class="mb-2">
        <label for="exampleInputEmail1" class="form-label">Image</label>
        <input name='image' type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <img src="{{ url('/uploads/' . $user->image) }}" width="80">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
   <a href="{{route('user.list')}}" type="button" class="btn btn-danger">Back</a>
</form>

@endsection