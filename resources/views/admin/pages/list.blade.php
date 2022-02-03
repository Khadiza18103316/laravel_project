@extends('admin.master')
@section('content')

    <h3 class="mb-4">User list</h3>

    @if(session()->has('msg'))
    <p class="alert alert-danger">{{session()->get('msg')}}</p>
@endif 

@if(session()->has('success'))
    <p class="alert alert-success">{{session()->get('success')}}</p>
@endif

    <a href="{{route('user.create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>
    <br>
    <br>
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Image</th>
                <th scope="col">Date</th>
                <th scope="col">View</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $user)
                <tr>
                    <th>{{ $key + 1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td><img src="{{url('/uploads/' .$user->image) }}" width="80"></td>
                    <td>{{ $user->date }}</td>
                    {{-- <td><a href="{{ route('product.edit', $product->id) }}"><button
                        class="btn btn-primary">Edit</button></a></td>
            <td><button class="btn btn-danger" data-toggle="modal"
                    data-target="#exampleModal{{ $product->id }}">Delete</button>
            </td>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $product->id }}" tabindex="-1"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <form action="{{ route('product.delete', $product->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title"
                                    id="exampleModalLabel{{ $product->id }}">Delete
                                    confiramation
                                </h5>
                                <button type="button" class="close"
                                    data-dismiss="modal" aria-label="Close">
                                    <span aria-fidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Are you sure?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-danger">Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection