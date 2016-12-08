    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image" style="height: 50px; width: 50px; line-height: 45px; text-align: center; border-radius: 50%;border: 2px solid #fff; background-color: #3c8dbc;">
                <span style="font-weight: 300; font-size: 21px; display: block; vertical-align: middle; color: #fff; line-height: inherit;">
                    <strong>
                        {{ ucwords( substr(Auth::user()->first_name,0 ,1 ).substr(Auth::user()->last_name,0 ,1 ) )}}
                    </strong>
                </span>
            </div>
            <!--<div class="pull-left image">
                <img src="{{ asset('theme/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>-->
            <div class="pull-left info">
                <p>{{ ucwords( strtolower(Auth::user()->first_name.' '.Auth::user()->last_name ) ) }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">MENU PRINCIPAL</li>
            <li> <a href="{{ url('/') }}" > <i class="fa fa-home"></i> <span>Home</span> </a> </li>
            <li> <a href="{{ url('/student/email') }}" > <i class="fa fa-envelope"></i> <span>Email institucinal - Moodle </span> </a> </li>
            <!--<li> <a href="{{ url('/student/email/create') }}"> <i class="fa fa-key"></i> <span>Recuperar Contraseña Moodle</span> </a> </li>-->
            <li> <a href="{{ url('/student/campus') }}"> <i class="fa fa-file-text"></i> <span>Campus Estudiante</span> </a> </li>
            <!--<li>
                <a href="http://evaluacion.ul.edu.co/" target="_blank"><i class="fa fa-check-circle"></i> Evaluación Docentes</a>
            </li>-->
            <li> <a href="{{ url('/logout') }}" > <i class="fa fa-sign-out"></i> <span>Salir</span> </a> </li>
        </ul>
    </section>