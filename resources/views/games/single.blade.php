@extends('layouts.app')
@section('titles')
    <h2 class="az-dashboard-title">Earn Money by Playing and testing :  {{$game->name}}</h2>
    <p class="az-dashboard-text">Become a game tester for  {{$game->name}} </p>
@stop

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h4 class="card-title">Become a Game Tester by playing : {{$game->name}}</h4>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <p>{!! $game->body !!}</p>

            </div>
        </div>
        <hr>
        <h6>~ Gamers We are Looking for : {{$game->countneeded}} </h6>
        <hr>

        <h6>Apply For a Game Tester for {{$game->name}}</h6>
        <div class="input-group mb-3">
            <a href="{{route('fapply.create')}}" class="btn btn-block btn-az-primary">
                <i class="typcn typcn-user-outline"></i>
                Apply For a Game Tester
            </a>

        </div>


    </div>
@endsection

@section('metas')

<title>{{$game->seotitle}}</title>
<meta name="description" content="{{$game->seodescription}}">

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