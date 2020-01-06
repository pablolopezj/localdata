@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Customer <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Customer </li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="content">


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <section class="content">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">{{ $results[0]->Nombre }}</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fas fa-minus"></i></button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Internal ID:</th>
                                                <td>{{ $results[0]->Internal_ID }}</td>
                                            </tr>
                                            <tr>
                                                <th>Dash ID:</th>
                                                <td>{{ $results[0]->dash_id }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nombre:</th>
                                                <td>{{ $results[0]->Nombre }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $results[0]->Email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone:</th>
                                                <td>{{ $results[0]->Phone }}</td>
                                            </tr>
                                            <tr>
                                                <th>Representante de ventas:</th>
                                                <td>{{ $results[0]->Representante_ventas }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contacto principal:</th>
                                                <td>{{ $results[0]->Contacto_principal }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Marca de adquisición:</th>
                                                <td>{{ $results[0]->Marca_de_adquisicion }}</td>
                                            </tr>
                                            <tr>
                                                <th>PartnerBU</th>
                                                <td>{{ $results[0]->PartherBU }}</td>
                                            </tr>
                                            <tr>
                                                <th>Ciudad:</th>
                                                <td>{{ $results[0]->City }}</td>
                                            </tr>
                                            <tr>
                                                <th>Estado:</th>
                                                <td>{{ $results[0]->State }}</td>
                                            </tr>
                                            <tr>
                                                <th>Articulo:</th>
                                                <td>{{ $results[0]->Articulo }}</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de venta:</th>
                                                <td>{{ $results[0]->fecha_venta }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection