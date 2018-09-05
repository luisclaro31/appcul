<!-- Logo -->
<a href="{{ url('/admin') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>AC</b></span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>App</b>CUL</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('theme/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ ucwords( strtolower(Auth::user()->first_name.' '.Auth::user()->last_name ) ) }}</span>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                        <img src="{{ asset('theme/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                        <p>
                            {{ ucwords( strtolower(Auth::user()->first_name.' '.Auth::user()->last_name ) ) }} - {{ Auth::user()->identification }}
                            <small>Member since Ene. 2016</small>
                        </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <a href="{{ url('/student/email') }}">Email</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="{{ url('/student/campus') }}">Notas</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="{{ url('/') }}">Home</a>
                            </div>
                        </div>
                        <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <div class="pull-left">
                            <a href="{{ url('/student/email') }}" class="btn btn-default btn-flat">Email</a>
                        </div>
                        <div class="pull-right">
                            <a href="{{ url('/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                        </div>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
    </div>
</nav>