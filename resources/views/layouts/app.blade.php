<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo') | Task9</title>
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a></li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><span class="nav-link">@yield('titulo')</span></li>
    </ul>
  </nav>

  <!-- Sidebar -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
      <span class="brand-text font-weight-light"><strong>Task9</strong></span>
    </a>
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview">

          <li class="nav-item">
            <a href="{{ route('home') }}"
               class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>Inicio</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('fotos') }}"
               class="nav-link {{ request()->routeIs('fotos') ? 'active' : '' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>Fotos</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('contacto') }}"
               class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Contacto</p>
            </a>
          </li>

        </ul>
      </nav>
    </div>
  </aside>

  <!-- Contenido -->
  <div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <h1>@yield('titulo')</h1>
      </div>
    </section>
    <section class="content">
      <div class="container-fluid">
        @yield('contenido')
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="main-footer">
    <strong>Actividad 11</strong> &mdash; Desarrollado por <strong>Oscar</strong>
    <div class="float-right">Materia: Desarrollo Web{{ date('Y') }}</div>
  </footer>

</div>

<script src="{{ asset('vendor/adminlte/dist/js/adminlte.min.js') }}"></script>
</body>
</html>