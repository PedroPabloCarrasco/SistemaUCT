@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container-fluid">

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h4 class="mb-0">Gestión de Proyectos I+D+i</h4>
            <small class="text-muted">Seguimiento general del sistema UCT</small>
        </div>

        <div>
            <button class="btn btn-outline-secondary btn-sm">Exportar</button>
            <button class="btn btn-primary btn-sm">+ Nuevo Proyecto</button>
        </div>
    </div>

    <!-- FILTROS -->
    <div class="card mb-4">
        <div class="card-body d-flex gap-2 flex-wrap">

            <input class="form-control" placeholder="Buscar proyectos..." style="max-width: 220px;">

            <select class="form-select" style="max-width: 180px;">
                <option>Estado</option>
            </select>

            <select class="form-select" style="max-width: 180px;">
                <option>Línea / Área</option>
            </select>

            <select class="form-select" style="max-width: 180px;">
                <option>Responsable</option>
            </select>

            <input type="date" class="form-control" style="max-width: 180px;">

        </div>
    </div>

    <!-- CARDS ESTADO -->
    <div class="row g-3 mb-4">

        <div class="col-md-3">
            <div class="card p-3 shadow-sm">
                <small>Total Proyectos</small>
                <h4>56</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-sm">
                <small>En Ejecución</small>
                <h4>24</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-sm">
                <small>En Evaluación</small>
                <h4>12</h4>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card p-3 shadow-sm">
                <small>Finalizados</small>
                <h4>15</h4>
            </div>
        </div>

    </div>

    <!-- TABLA -->
    <div class="card">
        <div class="card-body table-responsive">

            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Proyecto</th>
                        <th>Área</th>
                        <th>Responsable</th>
                        <th>Estado</th>
                        <th>Avance</th>
                        <th>Fechas</th>
                        <th>Monto</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>UCT-2024-01</td>
                        <td>Inteligencia Artificial</td>
                        <td>Educación</td>
                        <td>Dr. Juan Pérez</td>
                        <td><span class="badge bg-success">En ejecución</span></td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar" style="width: 65%"></div>
                            </div>
                        </td>
                        <td>01/2024 - 02/2026</td>
                        <td>$120.000.000</td>
                        <td>
                            <button class="btn btn-sm btn-outline-primary">👁</button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>

    <!-- PAGINACIÓN -->
    <div class="d-flex justify-content-end mt-3">
        <nav>
            <ul class="pagination">
                <li class="page-item"><a class="page-link">1</a></li>
                <li class="page-item"><a class="page-link">2</a></li>
            </ul>
        </nav>
    </div>

</div>

@endsection