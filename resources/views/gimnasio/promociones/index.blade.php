@extends('layout.block')
@section('title', 'Promociones')

@section('content-englobal')
    <!-- Content Englobal. Contains page global renderize content -->
    <div class="content-englobal">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Promociones</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Inicio</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <button type="button" class="btn btn-primary">Registrar nuevo <i class="fas fa-plus"></i></button>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead class="bg-dark">
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Rutina del día</td>
                                                <td>Promoción solo de un día</td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1 mes</td>
                                                <td>Promoción de un mes</td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2 meses</td>
                                                <td>Promoción de dos mes</td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3 mes</td>
                                                <td>Promoción de tres meses</td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i
                                                            class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i
                                                            class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content englobal -->
@endsection
