@include('admin.static.header')

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                    @yield('titles')
                </div>
                <div class="az-content-header-right">

                    <a href="/" target="_blank" class="btn btn-success">Visit Website</a>

                </div>
            </div>

            @if (\Session::has('message'))
                <div class="alert alert-outline-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <strong>System Message!</strong>  {{\Session::get('message')}}
                </div>
            @endif
            <div class="row row-sm mg-b-20">

                <div class="col-lg-12 mg-t-20 mg-lg-t-0">
                    @yield('content')
                </div>
            </div><!-- row -->


        </div>
    </div>
</div>
@include('static.footer')

<script src="{{asset('assets/lib/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/lib/ionicons/ionicons.js')}}"></script>
<script src="{{asset('assets/lib/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/lib/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/lib/chart.js/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/lib/peity/jquery.peity.min.js')}}"></script>

<script src="{{asset('assets/js/azia.js')}}"></script>
<script src="{{asset('tinymce/tinymce.min.js')}}"></script>
@yield('scripts')
</body>
</html>
