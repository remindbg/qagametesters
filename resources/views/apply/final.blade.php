@extends('layouts.app')
@section('titles')
    <h2 class="az-dashboard-title">Thank You for Applying </h2>
    <p class="az-dashboard-text">Thank you for apply as a game tester</p>
@stop

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h4 class="card-title">We received your apply</h4>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <p>Hello   <b>{{auth()->user()->name}}</b></p>
                <p>Once you are approved, we`ll reach You via email adress</p>
                <p>
                    Your current submission is for : {{$game_name}}
                </p>

            </div>
        </div>
        <hr>
    </div>
@endsection

@section('metas')

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