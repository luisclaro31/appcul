<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AppCul | @yield('tittle')</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Style -->
    @include('theme.head.style')
  </head>
  <body class="hold-transition skin-blue fixed sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <!-- Menu Principal -->
        @include('theme.header.menu_principal')
      </header>
      <aside class="main-sidebar">
        <!-- Menu Izquierdo -->
        @include('theme.body.menu_left')
      </aside>
      <div class="content-wrapper">
        @yield('content')
      </div>
      <!-- Footer -->
      @include('theme.footer.footer')
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Menu Derecho -->
        @include('theme.body.menu_right')
      </aside>
      <div class="control-sidebar-bg"></div>
    </div>
    <!-- Script -->
    @include('theme.footer.script')
    @yield('script')
  </body>
</html>
