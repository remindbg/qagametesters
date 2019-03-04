@extends('layouts.app')
@section('titles')
    <h2 class="az-dashboard-title">Account Profile</h2>
@stop

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <div class="alert alert-outline-info mg-b-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Oh snap!</strong> Your current account status is: <b>Pending</b>
                </div>
                <hr>
                <p class="az-dashboard-text">Welcome {{ Auth::user()->username }}</p>

            </div>
        </div>
    </div>
@endsection
