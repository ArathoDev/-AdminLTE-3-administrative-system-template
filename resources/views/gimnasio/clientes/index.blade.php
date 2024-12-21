@extends('layout.block')
@section('title', 'Clientes')

@section('content-englobal')
    <!-- Content Englobal. Contains page global renderize content -->
    <div class="content-englobal">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Clientes</h1>
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
                                            <th>Codigo HK</th>
                                            <th>DNI</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Celular</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>HK-72213763</td>
                                                <td>72213763</td>
                                                <td>Daryl Arath</td>
                                                <td>Oscco Bustamante</td>
                                                <td>
                                                    <a href="https://wa.me/51956467609" target="_blank">956467609</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i
                                                            class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HK-81124567</td>
                                                <td>81124567</td>
                                                <td>John</td>
                                                <td>Doe Smith</td>
                                                <td>
                                                    <a href="https://wa.me/51987654321" target="_blank">987654321</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HK-91436258</td>
                                                <td>91436258</td>
                                                <td>Emily</td>
                                                <td>Johnson Rivera</td>
                                                <td>
                                                    <a href="https://wa.me/51912345678" target="_blank">912345678</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HK-72103458</td>
                                                <td>72103458</td>
                                                <td>Michael</td>
                                                <td>Brown Torres</td>
                                                <td>
                                                    <a href="https://wa.me/51976543210" target="_blank">976543210</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HK-63421579</td>
                                                <td>63421579</td>
                                                <td>Sarah</td>
                                                <td>Martinez Guzmán</td>
                                                <td>
                                                    <a href="https://wa.me/51956789012" target="_blank">956789012</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>HK-85297463</td>
                                                <td>85297463</td>
                                                <td>Daniel</td>
                                                <td>Hernandez López</td>
                                                <td>
                                                    <a href="https://wa.me/51965432178" target="_blank">965432178</a>
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
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
