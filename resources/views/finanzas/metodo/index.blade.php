@extends('layout.block')
@section('title', 'Métodos de pago')

@section('styles')

@endsection

@section('content-englobal')
    <!-- Content Englobal. Contains page global renderize content -->
    <div class="content-englobal">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Métodos de pago</h1>
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
                    {{-- <div class="col-md-4">
                        <!-- general form elements -->
                        <div class="card">
                            <!-- form start -->
                            <form>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="label-input" for="txtNombreMetodo">Nombre del método de pago:</label>
                                        <input type="text" class="form-control" id="txtNombreMetodo">
                                    </div>
                                    <div class="form-group">
                                        <label for="txtDescripcionMetodo">Descripción:</label>
                                        <textarea id="txtDescripcionMetodo" class="form-control" name="" rows="3"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="txtImagenMetodo">Imagen:</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="txtImagenMetodo">
                                                <label class="custom-file-label" for="txtImagenMetodo"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary w-100"><i class="fas fa-save"></i>
                                            Guardar</button>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div> --}}
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
                                            <th>Imagen</th>
                                            <th></th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Efectivo</td>
                                                <td>Método de pago con dinero en físico</td>
                                                <td>
                                                    <img src="https://cdn.iconscout.com/icon/free/png-256/free-cashapp-3521324-2944743.png?f=webp" alt="img-efectivo" width="50">
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Yape</td>
                                                <td>Método de pago con dinero en digital</td>
                                                <td>
                                                    <img src="https://logosenvector.com/logo/img/yape-bcp-4390.jpg" alt="img-yape" width="50">
                                                </td>
                                                <td>
                                                    <a href="#" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
