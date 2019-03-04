@extends('layouts.app')
@section('titles')
    <h2 class="az-dashboard-title">Become A Game Tester Now</h2>
    <p class="az-dashboard-text">Become a game tester and earn money </p>
@stop

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h4 class="card-title">QAGameTesters Application Process</h4>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <form action="{{route('fapply.store')}}" method="POST">
                    @csrf
                    <div class="input-group mb-3">

                        <div class="d-flex flex-column wd-md-800 pd-30 pd-sm-40 bg-gray-200">
                            <div class="form-group">
                                <label for="">Email Adress * Associated with our website</label>
                                <input type="text" class="form-control" name="email" disabled  value="{{auth()->user()->email}}">
                            </div>
                            <div class="form-group">
                                <label for="">Your Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter your Name">
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="form-group">
                                        <label for="age">Age</label>
                                        <input type="number" name="age" min="10"  class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <label for="age">Country</label>
                                        <input type="text" class="form-control" name="country" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    Tell US In a free text why you want to become a Game Tester and why you love playing games. You can include previous experience or things You think We might want to see to speed up your approval process
                                </div>
                                <hr>
                                <textarea rows="3" name="body" class="form-control" placeholder=""></textarea>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                   Tell us about Your favorite games and Your gaming skills - leagues, ranks, achievements... If you are not a competitive type of gamer - tell Us why you would enjoy to become a game tester.
                                </div>
                                <hr>
                                <textarea rows="3" name="skills" class="form-control" placeholder=""></textarea>
                            </div>

                                <p class="mg-b-10">Pick a game</p>
                                <select class="form-control select2-no-search" name="game_id">
                                    @foreach($games as $game)
                                    <option value="{{$game->id}}">{{$game->name}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <button type="submit" class="btn btn-block btn-az-primary">
                            <i class="typcn typcn-user-outline"></i>
                            Apply
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
    </div>
@endsection

@section('metas')

    <title>Apply To Become a Game Tester - QAGameTesters Community</title>
    <meta name="description" content="Apply Now and Start Earning Money By Playing Games. We connect passionate gamers with the right comopanies that are looking for Game Testers">

@stop

@section('scripts')
    <script>
        $(function(){
            'use strict'
            $(document).ready(function(){
                $('.select2').select2({
                    placeholder: 'Choose one Game'
                });

                $('.select2-no-search').select2({
                    minimumResultsForSearch: Infinity,
                    placeholder: 'Choose a Game'
                });
            });


        });

    </script>

@stop