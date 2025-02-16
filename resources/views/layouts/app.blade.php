<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="A brief description of the page">
        <meta name="author" content="Author Name">
        <title>ESFE</title>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="{{ route('home') }}">ESFE</a>
            <!-- Sidebar Toggle-->
            @if (auth()->check())
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle"><i class="fas fa-bars"></i></button>
            @endif
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        @if (auth()->check())
                        <li class="dropdown-header">{{ auth()->user()->email }}</li>
                        <li>
                            <form action="{{ route('docentes.logout') }}" method="POST" style="display: inline;">
                                @csrf
                                <button type="submit" class="dropdown-item">Cerrar sesión</button>
                            </form>
                        </li>
                        @else
                        <li><a class="dropdown-item" href="{{ route('docentes.showLoginForm') }}">Iniciar sesión como docente</a></li>
                        <li><a class="dropdown-item" href="{{ route('estudiantes.showLoginForm') }}">Asistencia estudiante</a></li>
                        @endif
                    </ul>
                </li>
            </ul>
        </nav>
        @if (auth()->check())
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Mantenimiento</div>
                            <a class="nav-link" href="{{ route('docentes.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Docentes
                            </a>
                            <a class="nav-link" href="{{ route('grupos.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Grupos
                            </a>
                            <a class="nav-link" href="{{ route('docentes_grupos.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Docentes Grupos
                            </a>
                            <a class="nav-link" href="{{ route('estudiantes.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Estudiantes
                            </a>
                            <a class="nav-link" href="{{ route('estudiantes_grupos.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Estudiantes Grupos
                            </a>
                            <a class="nav-link" href="{{ route('asistencias.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Asistencias
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
        @endif
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        @yield('content')
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
    </body>
</html>
