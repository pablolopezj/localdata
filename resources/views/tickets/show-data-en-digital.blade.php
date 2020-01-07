@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Detalle de Ticket - En Digital <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tickets</a></li>
                    <li class="breadcrumb-item active"> En Digital </li>
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
                            <h3 class="card-title">{{ $results[0]->Empresa }}</h3>
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
                                                <th>Number:</th>
                                                <td>{{ $results[0]->Numero }}</td>
                                            </tr>
                                            <tr>
                                                <th>Empresa:</th>
                                                <td>{{ $results[0]->Empresa }}</td>
                                            </tr>
                                            <tr>
                                                <th>Asunto:</th>
                                                <td>{{ $results[0]->Asunto }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sales Order:</th>
                                                <td>{{ $results[0]->Sales_Order }}</td>
                                            </tr>
                                            <tr>
                                                <th>Estatus:</th>
                                                <td>{{ $results[0]->Estado }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $results[0]->Email }}</td>
                                            </tr>
                                            <tr>
                                                <th>Origen oportunidad:</th>
                                                <td>{{ $results[0]->Origen_Oport }}</td>
                                            </tr>
                                            <tr>
                                                <th>Proyecto:</th>
                                                <td>{{ $results[0]->Asunto }}</td>
                                            </tr>
                                            <tr>
                                                <th>PartnerBU</th>
                                                <td>{{ $results[0]->Business_Partner }}</td>
                                            </tr>
                                            <tr>
                                                <th>Perfil:</th>
                                                <td>{{ $results[0]->Perfil }}</td>
                                            </tr>
                                            <tr>
                                                <th>Asignado a:</th>
                                                <td>{{ $results[0]->Asignado_a }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contacto:</th>
                                                <td>{{ $results[0]->Contacto }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="vip-content-tab" data-toggle="pill" href="#vip-content" role="tab" aria-controls="vip-content" aria-selected="true">VIP Interview</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <div class="tab-pane fade show active" id="vip-content" role="tabpanel" aria-labelledby="vip-content-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Line of Business:</b> <a class="float-right">{{ $results[0]->Line_of_Business }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Company_Slogan:</b> <a class="float-right">{{ $results[0]->Company_Slogan }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Call_to_action:</b> <a class="float-right">{{ $results[0]->Call_to_action }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Sliding_pane_short_description:</b> <a class="float-right">{{ $results[0]->Sliding_pane_short_description }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Testimonials:</b> <a class="float-right">{{ $results[0]->Testimonials }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Products_Services:</b> <a class="float-right">{{ $results[0]->Products_Services }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Promo:</b> <a class="float-right">{{ $results[0]->Promo }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Benefits:</b> <a class="float-right">{{ $results[0]->Benefits }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Long_Description:</b> <a class="float-right">{{ $results[0]->Long_Description }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Logos:</b> <a class="float-right">{{ $results[0]->Logos }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Logos_Extra:</b> <a class="float-right">{{ $results[0]->Logos_Extra }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Horarios_de_atencion:</b> <a class="float-right">{{ $results[0]->Horarios_de_atencion }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Metodos_de_pago:</b> <a class="float-right">{{ $results[0]->Metodos_de_pago }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Ciudades_de_cobertura:</b> <a class="float-right">{{ $results[0]->Ciudades_de_cobertura }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Comentarios_adicionales:</b> <a class="float-right">{{ $results[0]->Comentarios_adicionales }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection