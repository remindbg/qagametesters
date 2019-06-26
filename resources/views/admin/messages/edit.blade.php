@extends('layouts.admin')


@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h6 class="card-title">View Single Message from {{$message->name}}</h6>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">Name</label>
                        </div><!-- col -->
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input type="text" name="name" value="{{$message->name}}" class="form-control">
                        </div><!-- col -->
                    </div><!-- row -->
                <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                        <label class="form-label mg-b-0">Email Adress</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-5 mg-md-t-0">
                        <input type="text" name="name" value="{{$message->email}}" class="form-control">
                    </div><!-- col -->
                </div><!-- row -->

                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">Age</label>
                        </div><!-- col -->
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input type="text" name="age" value="{{$message->age}}" class="form-control">
                        </div>
                    </div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">Country</label>
                        </div><!-- col -->
                        <div class="col-md-8 mg-t-5 mg-md-t-0">
                            <input type="text" name="countneeded" value="{{$message->country}}" class="form-control">
                        </div>
                    </div>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">Main Body</label>
                        </div><!-- col -->
                        <div class="col-md-8 mg-t-9 mg-md-t-0">
                            <textarea name="body" id="" cols="60" rows="5">{{$message->body}}</textarea>
                        </div>
                    </div>
                    <hr>
                    <div class="row row-xs align-items-center mg-b-20">
                        <div class="col-md-4">
                            <label class="form-label mg-b-0">Skills</label>
                        </div><!-- col -->
                        <div class="col-md-8 mg-t-9 mg-md-t-0">
                            <textarea name="body" id="" cols="60" rows="5">{{$message->skills}}</textarea>
                        </div>
                    </div><!-- row -->
                <div class="row row-xs align-items-center mg-b-20">
                    <div class="col-md-4">
                        <label class="form-label mg-b-0">Game</label>
                    </div><!-- col -->
                    <div class="col-md-8 mg-t-9 mg-md-t-0">
                        <select class="form-control select2-no-search" name="game_id">
                            @foreach($games as $game)
                                <option value="{{$game->id}}">{{$game->name}}</option>
                            @endforeach
                        </select>                    </div>
                </div><!-- row -->



                    <button class="btn btn-success pd-x-30 mg-r-5" type="submit">Edit</button>


            </div>
        </div>
    </div>
@endsection

@section('scripts')

@stop
