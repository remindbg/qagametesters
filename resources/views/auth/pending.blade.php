@extends('layouts.app')
@section('titles')
    <h2 class="az-dashboard-title">Account Pending Manual Activation</h2>
@stop

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <div class="alert alert-outline-danger mg-b-0" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>Oh snap!</strong> Your current account status is: <b>Not Activated Yet</b>

                </div>
                <hr>
                <p class="az-dashboard-text">Due to high volume of registrations, we need to manually approve all registrations</p>

            </div>
        </div>
    </div>
@endsection
