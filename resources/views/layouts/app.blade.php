@include('static.header')

<div class="az-content az-content-dashboard">
    <div class="container">
        <div class="az-content-body">
            <div class="az-dashboard-one-title">
                <div>
                   @yield('titles')
                </div>
                <div class="az-content-header-right">

                    @guest()
                        <a href="register" class="btn btn-info">Register</a>
                        <a href="login" class="btn btn-success">Login</a>

                    @endguest
                    @auth()
                        <a href="/portal/profile/" class="btn btn-success">Profile</a>

                    @endauth
                    <a href="/portal/company-login/" class="btn btn-primary">For Companies</a>

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
                <div class="col-lg-4">
                    <div class="card card-dashboard-pageviews">
                        <div class="card-header">
                            <h6 class="card-title">Games we are highly Interested</h6>
                            <p class="card-text">We are looking  for highly skilled gamers playing:</p>
                        </div><!-- card-header -->
                        <div class="card-body">
                            <div class="az-list-item">
                                <div>
                                    <h6>Battle Royale Games</h6>
                                    <span>Fortnite / PUBG/ Apex Legends</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">~7,755</h6>
                                    <span>goal: ~10 000</span>
                                </div>
                            </div><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>Real Time Strategy</h6>
                                    <span>Games Similar to: Starcraft 2</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">5,215</h6>
                                    <span>goal: ~ 6000</span>
                                </div>
                            </div>
                            <div class="az-list-item">
                                <div>
                                    <h6>Moba Games</h6>
                                    <span>eg: Dota and LOL</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">~Hidden</h6>
                                    <span>~Hidden</span>
                                </div>
                            </div><!-- list-group-item --><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>FPS Games</h6>
                                    <span>Games similar to Counter Strike</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">4,848</h6>
                                    <span>~ 5000+</span>
                                </div>
                            </div><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>MMORPG Games</h6>
                                    <span>WOW, LineAge, Guild Wars 2</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">~Hidden</h6>
                                    <span>~Hidden</span>
                                </div>
                            </div><!-- list-group-item -->
                            <div class="az-list-item">
                                <div>
                                    <h6>Mobile Games</h6>
                                    <span>Any type of mobile games!</span>
                                </div>
                                <div>
                                    <h6 class="tx-primary">No Restrictions</h6>
                                    <span>No Restrictions</span>
                                </div>
                            </div><!-- list-group-item -->
                        </div><!-- card-body -->
                    </div><!-- card -->

                </div><!-- col -->
                <div class="col-lg-8 mg-t-20 mg-lg-t-0">
                   @yield('content')
                </div>
            </div><!-- row -->

            <div class="row row-sm mg-b-20 mg-lg-b-0">
                <div class="col-lg-5 col-xl-4">
                    <div class="row row-sm">
                        <div class="col-md-6 col-lg-12 mg-b-20 mg-md-b-0 mg-lg-b-20">
                            <div class="card card-dashboard-five">
                                <div class="card-header">
                                    <h6 class="card-title">Your Statistics</h6>
                                    <span class="card-text">Not Logged in or account not active</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 mg-b-20 mg-md-b-0 mg-lg-b-20">
                            <div class="card card-dashboard-five">
                                <div class="card-header">
                                    <h6 class="card-title">About</h6>
                                    <p class="card-text">
                                        <p>Avenue Prince de Liège,</p>
                                        <p>133 5100 Jambes</p>
                                        <p> tel +32 (0)81 77 80 80</p>
                                     </p>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="card card-dashboard-five">
                                <div class="card-header">
                                    <h6 class="card-title">Approved Statistics</h6>
                                    <span class="card-text"></span>
                                </div><!-- card-header -->
                                <div class="card-body row row-sm">
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                                        </div>
                                        <div>
                                            <label>% New Players Jump</label>
                                            <h5>26.80%</h5>
                                        </div>
                                    </div><!-- col -->
                                    <div class="col-6 d-sm-flex align-items-center">
                                        <div class="mg-b-10 mg-sm-b-0 mg-sm-r-10">
                                        </div>
                                        <div>
                                            <label>Earned Money</label>
                                            <h5>Average: 156$</h5>
                                        </div>
                                    </div><!-- col -->
                                </div><!-- card-body -->
                            </div><!-- card-dashboard-five -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- col-lg-3 -->
                <div class="col-lg-7 col-xl-8 mg-t-20 mg-lg-t-0">
                    <div class="card card-table-one">
                        <h6 class="card-title">Latest Approved Members</h6>
                        <p class="az-content-text mg-b-20">Latest approved gamers. * You can disable set Your profile to private in the Portal/Users/Settings page.</p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="wd-5p">&nbsp;</th>
                                    <th class="wd-45p">Country</th>
                                    <th>Game</th>
                                    <th>Assigned Tasks</th>
                                    <th>Initial Trust %</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><i class="flag-icon flag-icon-us flag-icon-squared"></i></td>
                                    <td><strong>DavidMid</strong></td>
                                    <td>RTS / Starcraft 2</td>
                                    <td>yes</td>
                                    <td>15.47%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-gb flag-icon-squared"></i></td>
                                    <td><strong>james_p</strong></td>
                                    <td>Mobile</td>
                                    <td>yes</td>
                                    <td>7.99%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-in flag-icon-squared"></i></td>
                                    <td><strong>Raviii</strong></td>
                                    <td>Battle Royale</td>
                                    <td>yes</td>
                                    <td>2.40%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-ca flag-icon-squared"></i></td>
                                    <td><strong>*private</strong></td>
                                    <td>*private</td>
                                    <td>yes</td>
                                    <td>15.09%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-fr flag-icon-squared"></i></td>
                                    <td><strong>*private</strong></td>
                                    <td>*private</td>
                                    <td>yes</td>
                                    <td>15.09%</td>
                                </tr>
                                <tr>
                                    <td><i class="flag-icon flag-icon-ph flag-icon-squared"></i></td>
                                    <td><strong>*private</strong></td>
                                    <td>Battle Royale</td>
                                    <td>yes</td>
                                    <td>15.09%</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
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
<script src="{{asset('assets/lib/select2/js/select2.min.js')}}"></script>

<script src="{{asset('assets/js/azia.js')}}"></script>

@yield('scripts')
</body>
</html>
