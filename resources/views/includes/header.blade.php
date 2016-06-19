
    <!-- Header-->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <div id="mobile-menu">
                    <div class="left-nav-toggle">
                        <a href="#">
                            <i class="stroke-hamburgermenu"></i>
                        </a>
                    </div>
                </div>
                <a class="navbar-brand" href="/dashboard">
                    PassPoint
                    <span>v.1.0</span>
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="stroke-hamburgermenu"></i>
                    </a>
                </div>
                <form class="navbar-form navbar-left">
                    <input type="text" class="form-control" placeholder="Search data for analysis" style="width: 175px">
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="versions.html" >Versions
                            <span class="label label-warning pull-right">2</span>
                        </a>
                    </li>

                

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
                            {{ Auth::user()->email }} <span class="label label-warning pull-right"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li ><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout
                            <span class="label label-warning pull-right"></span></a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <ul class="dropdown-menu" role="menu">  </ul>
                    </li>



                </ul>
            </div>
        </div>
    </nav>
    <!-- End header-->
<!--
                        <a href="login.html">
                            <span class="profile-address">luna@company.io</span>
                            <img src="/images/profile.jpg" class="img-circle" alt="">
                        </a>


               
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a class="profile-address"  href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li ><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif


                        -->