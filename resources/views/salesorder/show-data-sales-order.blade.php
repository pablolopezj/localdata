@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Detalle de la Sales Order <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Sales Order </li>
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
                                                <th>Fecha:</th>
                                                <td>{{ $results[0]->Fecha }}</td>
                                            </tr>
                                            <tr>
                                                <th>Periodo:</th>
                                                <td>{{ $results[0]->Periodo }}</td>
                                            </tr>
                                            <tr>
                                                <th>Número de documento:</th>
                                                <td>{{ $results[0]->Numero_de_documento }}</td>
                                            </tr>
                                            <tr>
                                                <th>Nombre:</th>
                                                <td>{{ $results[0]->Nombre }}</td>
                                            </tr>
                                            <tr>
                                                <th>Cuenta:</th>
                                                <td>{{ $results[0]->Cuenta }}</td>
                                            </tr>
                                            <tr>
                                                <th>Importe:</th>
                                                <td>{{ $results[0]->Importe }}</td>
                                            </tr>
                                            <tr>
                                                <th>RFC:</th>
                                                <td>{{ $results[0]->RFC }}</td>
                                            </tr>
                                            <tr>
                                                <th>Representante de ventas:</th>
                                                <td>{{ $results[0]->Representante_de_ventas }}</td>
                                            </tr>
                                            <tr>
                                                <th>Oportunidad:</th>
                                                <td>{{ $results[0]->Oportunidad }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Fuente de cliente interesados:</th>
                                                <td>{{ $results[0]->Fuente_de_cliente_interesados }}</td>
                                            </tr>
                                            <tr>
                                                <th>Moneda</th>
                                                <td>{{ $results[0]->Moneda }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de cambio:</th>
                                                <td>{{ $results[0]->Tipo_de_cambio }}</td>
                                            </tr>
                                            <tr>
                                                <th>Forma de pago:</th>
                                                <td>{{ $results[0]->Forma_de_pago }}</td>
                                            </tr>
                                            <tr>
                                                <th>Artículo:</th>
                                                <td>{{ $results[0]->Articulo }}</td>
                                            </tr>
                                            <tr>
                                                <th>Customers Website URL (English):</th>
                                                <td>{{ $results[0]->Customers_Website_URL_English }}</td>
                                            </tr>
                                            <tr>
                                                <th>Customers Website URL (Spanish):</th>
                                                <td>{{ $results[0]->Customers_Website_URL_Spanish }}</td>
                                            </tr>
                                            <tr>
                                                <th>Subsidiaria:</th>
                                                <td>{{ $results[0]->Subsidiaria }}</td>
                                            </tr>
                                            <tr>
                                                <th>SLA:</th>
                                                <td>{{ $results[0]->SLA }}</td>
                                            </tr>
                                            <tr>
                                                <th>Virket ID:</th>
                                                <td>{{ $results[0]->Virket_ID }}</td>
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