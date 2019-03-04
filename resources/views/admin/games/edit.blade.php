@extends('layouts.admin')


@section('content')
    <div class="card card-dashboard-four">
        <div class="card-header">
            <h6 class="card-title">Edit New Game</h6>
        </div><!-- card-header -->
        <div class="card-body row">
            <div class="col-md-12">
                <form action="{{route('games.update',$game->id)}}" method="POST">
                    @csrf
                    @method('put')

                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Name</label>
                            </div><!-- col -->
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" name="name" value="{{$game->name}}" class="form-control">
                            </div><!-- col -->
                        </div><!-- row -->

                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Slug</label>
                            </div><!-- col -->
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" name="slug" value="{{$game->slug}}" class="form-control">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Count Needed</label>
                            </div><!-- col -->
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" name="countneeded" value="{{$game->countneeded}}" class="form-control">
                            </div>
                        </div>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Body Description</label>
                            </div><!-- col -->
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <textarea name="body" id="body" cols="30" rows="10">{{$game->body}}</textarea>
                            </div>
                        </div>
                        <hr>
                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">SEO Title</label>
                            </div><!-- col -->
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" name="seotitle" value="{{$game->seotitle}}" class="form-control">
                            </div><!-- col -->
                        </div><!-- row -->

                        <div class="row row-xs align-items-center mg-b-20">
                            <div class="col-md-4">
                                <label class="form-label mg-b-0">Seo Description</label>
                            </div><!-- col -->
                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                <input type="text" name="seodescription" value="{{$game->seodescription}}" class="form-control">
                            </div><!-- col -->
                        </div><!-- row -->
                        <button class="btn btn-az-info pd-x-30 mg-r-5" type="submit">Edit</button>

                </form>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        tinymce.init({
            selector: '#body'
        });
    </script>
@stop
