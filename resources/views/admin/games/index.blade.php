@extends('layouts.admin')
@section('titles')

@stop

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h6 class="card-title">All Games</h6>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-hover mg-b-0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>slug</th>
                            <th>Messages Count</th>
                            <th>Edit</th>
                            <th>Messages Count</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($games as $game)
                            <tr>
                                <th scope="row">{{$game->id}}</th>
                                <td>{{$game->name}}</td>
                                <td>{{$game->slug}}</td>
                                <td>{{$game->messages()->count()}}</td>
                                <td>
                                    <a href="{{route('games.edit',$game->id)}}">
                                        <button class="btn btn-info">Edit</button>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('games.destroy',$game->id)}}" method="POST">
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
