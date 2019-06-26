@extends('layouts.admin')
@section('titles')

@stop

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h6 class="card-title">All Messages</h6>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>date</th>
                            <th>email</th>
                            <th>country</th>
                            <th>age</th>
                            <th>view</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <th scope="row">{{$message->id}}</th>
                                <td>{{$message->name}}</td>
                                <td>{{$message->created_at}}</td>
                                <td>{{$message->email}}</td>
                                <td>
                                    <a href="{{route('messages.show',$message->id)}}">
                                        <button class="btn btn-success">View</button>
                                    </a>
                                </td>
                                <td>
                                  <a href="{{route('messages.edit',$message->id)}}">
                                      <button class="btn btn-info">Edit</button>
                                  </a>
                                </td>
                                <td>
                                    <form action="{{route('messages.destroy',$message->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" type="submit"
                                                onclick="return confirm('delete?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
