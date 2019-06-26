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
                            <th>name</th>
                            <th>date registered</th>
                            <th>email</th>
                            <th>Active?</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->email}}</td>
                                <td>@if($user->active)yes @else no @endif</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
