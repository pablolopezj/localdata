@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Detalle Tarea - GoDaddy <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tarea</a></li>
                    <li class="breadcrumb-item active"> GoDaddy </li>
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
                            <h3 class="card-title">{{ $results[0]['Nombre'] }}</h3>
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
                                                <td>{{ $results[0]['Internal_ID'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Name:</th>
                                                <td>{{ $results[0]['Nombre'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Status</th>
                                                <td>{{ $results[0]['Project_Task_Status'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Partner BU:</th>
                                                <td>{{ $results[0]['PartnerBU'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Origen_Oport:</th>
                                                <td>{{ $results[0]['Origen_Oport'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email</th>
                                                <td>{{ $results[0]['Email'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone:</th>
                                                <td>{{ $results[0]['Phone'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sales_Order</th>
                                                <td>{{ $results[0]['Sales_Order'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>WC_Findings:</th>
                                                <td>{{ $results[0]['WC_Findings'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pipedrive_ID_Deal:</th>
                                                <td>{{ $results[0]['Pipedrive_ID_Deal'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>BCC_Email:</th>
                                                <td>{{ $results[0]['BCC_Email'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Virket_ID:</th>
                                                <td>{{ $results[0]['Virket_ID'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Associated_SKU:</th>
                                                <td>{{ $results[0]['Associated_SKU'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Resource_Allocated:</th>
                                                <td>{{ $results[0]['Resource_Allocated'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Supervisor_Asignado:</th>
                                                <td>{{ $results[0]['Supervisor_Asignado'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- Tabs -->
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="go-central-vip" data-toggle="pill" href="#go-central-content" role="tab" aria-controls="go-central-content" aria-selected="true">GoCentral VIP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="serv-or-prod-content" data-toggle="pill" href="#serv-or-prod" role="tab" aria-controls="serv-or-prod" aria-selected="false">Serv. o Prod.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="datos-de-negocio-content" data-toggle="pill" href="#datos-de-negocio" role="tab" aria-controls="datos-de-negocio" aria-selected="false">VIP Datos de negocio.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pagina-uno-content" data-toggle="pill" href="#pagina-uno" role="tab" aria-controls="pagina-uno" aria-selected="false">Paginas.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="e-commerce-content" data-toggle="pill" href="#e-commerce" role="tab" aria-controls="e-commerce" aria-selected="false">E-commerce.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="blog-content" data-toggle="pill" href="#blog" role="tab" aria-controls="blog" aria-selected="false">Blog.</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <!-- Go Central VIP -->
                                        <div class="tab-pane fade show active" id="go-central-content" role="tabpanel" aria-labelledby="go-central-vip">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Tipo de GoCentral:</b> <a class="float-right">{{ $results[0]['GoDaddy_Tipo_GoCentral1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Nombre del negocio:</b> <a class="float-right">{{ $results[0]['GDGC_Nombre_Negocio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Giro de la empresa:</b> <a class="float-right">{{ $results[0]['GoDaddy_Giro_Empresa_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Años de experiencia:</b> <a class="float-right">{{ $results[0]['GDGC_Anios_Experiencia'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>País o Zona Geográfica:</b> <a class="float-right">{{ $results[0]['GDGC_Pais_o_Zona_Geografica'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Servicio o Producto 1:</b> <a class="float-right">{{ $results[0]['GDGC_Servicio_o_Producto_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Servicio o Producto 2:</b> <a class="float-right">{{ $results[0]['GDGC_Servicio_o_Producto_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Servicio o Producto 3:</b> <a class="float-right">{{ $results[0]['GDGC_Servicio_o_Producto_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Servicio o Producto 4:</b> <a class="float-right">{{ $results[0]['GDGC_Servicio_o_Producto_4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Calle:</b> <a class="float-right">{{ $results[0]['GoDaddy_Calle'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Número exterior:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Ext'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Número interior:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Int'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Colonia:</b> <a class="float-right">{{ $results[0]['GoDaddy_Colonia'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Ciudad:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ciudad'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>País:</b> <a class="float-right">{{ $results[0]['GoDaddy_Pais'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Estado:</b> <a class="float-right">{{ $results[0]['GoDaddy_Estado'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Teléfono 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Teléfono 2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Teléfono 3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Horarios Abierto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Horarios_Abierto_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Formas de Pago:</b> <a class="float-right">{{ $results[0]['Godaddy_Otras_formas_de_Pago'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Email Contacto Direccion:</b> <a class="float-right">{{ $results[0]['GoDaddy_Email_Contacto_Direccion'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Servicios y productos -->
                                        <div class="tab-pane fade" id="serv-or-prod" role="tabpanel" aria-labelledby="serv-or-prod-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Giro Empresa:</b> <a class="float-right">{{ $results[0]['GoDaddy_Giro_Empresa_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Nombre Comercial:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_Comercial_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Slogan Basic:</b> <a class="float-right">{{ $results[0]['GoDaddy_Slogan_Basic_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Ítem más Vendido:</b> <a class="float-right">{{ $results[0]['GoDaddy_Item_mas_Vendido_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Promo Basic:</b> <a class="float-right">{{ $results[0]['GoDaddy_Promo_Basic_Texto'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>About:</b> <a class="float-right">{{ $results[0]['GoDaddy_About'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Equipo:</b> <a class="float-right">{{ $results[0]['GoDaddy_Equipo1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Frase Standard:</b> <a class="float-right">{{ $results[0]['GoDaddy_Frase_Standard_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VIP Datos de negocio -->
                                        <div class="tab-pane fade" id="datos-de-negocio" role="tabpanel" aria-labelledby="datos-de-negocio-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Calle:</b> <a class="float-right">{{ $results[0]['GoDaddy_Calle'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Num Ext:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Ext'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Num Int:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Int'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Colonia</b> <a class="float-right">{{ $results[0]['GoDaddy_Colonia'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Ciudad</b> <a class="float-right">{{ $results[0]['GoDaddy_Ciudad'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>País</b> <a class="float-right">{{ $results[0]['GoDaddy_Pais'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Estado</b> <a class="float-right">{{ $results[0]['GoDaddy_Estado'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Cédigo Postal</b> <a class="float-right">{{ $results[0]['GoDaddy_Codigo_Postal'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Mapa de Sitio</b> <a class="float-right">{{ $results[0]['GoDaddy_Mapa_de_Sitio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Aviso de Privacidad</b> <a class="float-right">{{ $results[0]['GoDaddy_Aviso_de_Privacidad'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Horarios Abierto</b> <a class="float-right">{{ $results[0]['GoDaddy_Horarios_Abierto_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Notas adicionales para direcciones</b> <a class="float-right">{{ $results[0]['GoDaddy_Notas_adicionales_para_direcciones'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Teléfono 1</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Teléfono 3</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_3'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Notas adicionales para teléfono</b> <a class="float-right">{{ $results[0]['GoDaddy_Notas_adicionales_para_telefono'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Email Contacto Direccion</b> <a class="float-right">{{ $results[0]['GoDaddy_Email_Contacto_Direccion'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Efectivo</b> <a class="float-right">{{ $results[0]['GoDaddy_Efectivo'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Cheque</b> <a class="float-right">{{ $results[0]['GoDaddy_Cheque'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Visa</b> <a class="float-right">{{ $results[0]['GoDaddy_Visa'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>MasterCard</b> <a class="float-right">{{ $results[0]['GoDaddy_MasterCard'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>American Express</b> <a class="float-right">{{ $results[0]['GoDAddy_American_Express'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Transferencia Electrónica</b> <a class="float-right">{{ $results[0]['GoDaddy_Transferencia_Electronica'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Otras formas de pago</b> <a class="float-right">{{ $results[0]['Godaddy_Otras_formas_de_Pago'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Drive</b> <a class="float-right">{{ $results[0]['GoDaddy_Drive'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Redes Sociales</b> <a class="float-right">{{ $results[0]['GoDaddy_Redes_Sociales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Instrucciones Adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Instrucciones_Adicionales_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Materiales Adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Materiales_Adicionales_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Paginas -->
                                        <div class="tab-pane fade" id="pagina-uno" role="tabpanel" aria-labelledby="pagina-uno-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 3 P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P1 Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P1_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 3 P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P2 Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P2_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage NotasSeccion 1 P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage NotasSeccion 2 P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P3'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>ExtraPage NotasSeccion 3 P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_3_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P3 Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P3_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 3 P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P4 Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P4_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 3 P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P5 Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P5_Notas_adicionales'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- E-commerce -->
                                        <div class="tab-pane fade" id="e-commerce" role="tabpanel" aria-labelledby="e-commerce-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Producto 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Descripción 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Categoria 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_4:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_4:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_4:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_4:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_4:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_5:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_5:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_5:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_5:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_5:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_6:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_6'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_6:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_6'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_6:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_6'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_6:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_6'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_6:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_6'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_7:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_7'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_7:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_7'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_7:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_7'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_7:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_7'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_7:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_7'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_8:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_8'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_8:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_8'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_8:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_8'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_8:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_8'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_8:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_8'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_9:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_9'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_9:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_9'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_9:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_9'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costos_9:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costos_9'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_9:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_9'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_10:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_10'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripción_10:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripción_10'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_10:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_10'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_10:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_10'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_10:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_10'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_11:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_11'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_11:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_11'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_11:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_11'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_11:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_11'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_11:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_11'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_12:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_12'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_12:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_12'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_12:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_12'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_12:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_12'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_12:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_12'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_13:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_13'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_13:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_13'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_13:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_13'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_13:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_13'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_13:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_13'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_14:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_14'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripción_14:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripción_14'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_14:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_14'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_14:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_14'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_14:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_14'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_15:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_15'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_15:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_15'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_15:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_15'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_15:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_15'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_15:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_15'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_16:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_16'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_16:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_16'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_16:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_16'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_16:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_16'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_17:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_17'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_17:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_17'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_17:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_17'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_17:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_17'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_17:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_17'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_18:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_18'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_18:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_18'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_18:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_18'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_18:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_18'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_18:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_18'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_19:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_19'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_19:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_19'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_19:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_19'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_19:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_19'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_19:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_19'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_20:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_20'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_20:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_20'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_20:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_20'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_20:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_20'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_20:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_20'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_4:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_5:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_6:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_6'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_7:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_7'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_8:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_8'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_9:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_9'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_de_Categoria_10:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_de_Categoria_10'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Comentarios_Adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_Comentarios_Adicionales'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Blog -->
                                        <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-content">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Titulo_de_nota:</b> <a class="float-right">{{ $results[0]['GoDaddy_Titulo_de_nota'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_de_nota:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_de_nota'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Contenido_de_nota:</b> <a class="float-right">{{ $results[0]['GoDaddy_Contenido_de_nota'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Titulo_de_nota_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Titulo_de_nota_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Contenido_de_Nota 2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Contenido_de_Nota 2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Comentarios_Adicionales_Blog:</b> <a class="float-right">{{ $results[0]['GoDaddy_Comentarios_Adicionales_Blog'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- End tab -->
                        </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection