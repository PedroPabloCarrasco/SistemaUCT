<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SISTEMA UCT')</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        body {
            overflow-x: hidden;
            background: #f4f6f9;
        }

        /* SIDEBAR */
        .sidebar {
            width: 250px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #111827;
            color: #fff;
            transition: all 0.3s;
        }

        .sidebar .nav-link {
            color: #cbd5e1;
            padding: 12px 20px;
        }

        .sidebar .nav-link:hover {
            background: #1f2937;
            color: #fff;
        }

        .sidebar-brand {
            padding: 20px;
            font-size: 18px;
            font-weight: bold;
            border-bottom: 1px solid #1f2937;
        }

        /* MAIN */
        .main-content {
            margin-left: 250px;
            transition: all 0.3s;
        }

        /* TOPBAR */
        .topbar {
            background: #fff;
            padding: 10px 20px;
            border-bottom: 1px solid #e5e7eb;
        }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div class="sidebar">
    <div class="sidebar-brand">
        SISTEMA UCT
    </div>

    <nav class="nav flex-column mt-3">
        <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-people"></i> Usuarios
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-folder"></i> Proyectos
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-list-check"></i> Tareas
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-bell"></i> Notificaciones
        </a>
    </nav>
</div>

<!-- MAIN CONTENT -->
<div class="main-content">

    <!-- TOP NAVBAR -->
    <div class="topbar d-flex justify-content-between align-items-center">
        <div>
            <button class="btn btn-outline-secondary btn-sm">
                <i class="bi bi-list"></i>
            </button>
        </div>

        <div class="dropdown">
            <a class="btn btn-light dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                {{ auth()->user()->name ?? 'Usuario' }}
            </a>

            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Perfil</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item">Cerrar sesión</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="p-4">
        @yield('content')
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>