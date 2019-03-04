@extends('layouts.admin')

@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h6 class="card-title">Message</h6>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
               <h6>Author: {{$message->author}}</h6>
                <hr>
                <h6>Date: {{$message->created_at}}</h6>
                <hr>
                <h6>Date: {{$message->title}}</h6>
                <hr>
                <h6>Date: {{$message->created_at}}</h6>
                <div class="card">
                    {{$message->bodymain}}
                </div>
                <div class="card">
                    {{$message->skills}}
                </div>
            </div>
        </div>
    </div>
@endsection
