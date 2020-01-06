@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Detalle de tarea - Claro <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tarea</a></li>
                    <li class="breadcrumb-item active"> Claro </li>
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
                                                <th>Sales Order:</th>
                                                <td>{{ $results[0]['Sales_Order'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Associated SKU:</th>
                                                <td>{{ $results[0]['Associated_SKU'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Proyecto:</th>
                                                <td>{{ $results[0]['Proyecto'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Partner BU</th>
                                                <td>{{ $results[0]['PartnerBU'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>GoDaddy Giro Empresa:</th>
                                                <td>{{ $results[0]['GoDaddy_Giro_Empresa_Texto'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Supervisor Asignado</th>
                                                <td>{{ $results[0]['Supervisor_Asignado'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Resource Allocated:</th>
                                                <td>{{ $results[0]['Resource_Allocated'] }}</td>
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
                                                            <b>Nombre Comercial:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_Comercial_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Slogan Basic:</b> <a class="float-right">{{ $results[0]['GoDaddy_Slogan_Basic_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>¿A qué sector va dirigido su sitio web?:</b> <a class="float-right">{{ $results[0]['A_que_sector_va_dirigido_su_sitio_web'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Ítem más Importante:</b> <a class="float-right">{{ $results[0]['GoDaddy_Item_mas_Importante_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Promo Basic:</b> <a class="float-right">{{ $results[0]['GoDaddy_Promo_Basic_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>About Opcional:</b> <a class="float-right">{{ $results[0]['GoDaddy_About_Opcional_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Equipo 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Equipo1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Frase Standard:</b> <a class="float-right">{{ $results[0]['GoDaddy_Frase_Standard_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Calle:</b> <a class="float-right">{{ $results[0]['GoDaddy_Calle'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Num Ext.:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Ext'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Num Int.:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Int'] }}</a>
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
                                                            <b>Código Postal:</b> <a class="float-right">{{ $results[0]['GoDaddy_Codigo_Postal'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Mapa del Sitio:</b> <a class="float-right">{{ $results[0]['GoDaddy_Mapa_de_Sitio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Aviso de Privacidad:</b> <a class="float-right">{{ $results[0]['GoDaddy_Aviso_de_Privacidad'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Horarios_Abierto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Horarios_Abierto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Notas adicionales para direcciones:</b> <a class="float-right">{{ $results[0]['GoDaddy_Notas_adicionales_para_direcciones'] }}</a>
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
                                                            <b>Notas adicionales para telefono:</b> <a class="float-right">{{ $results[0]['GoDaddy_Notas_adicionales_para_telefono'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Email_Contacto_Direccion:</b> <a class="float-right">{{ $results[0]['GoDaddy_Email_Contacto_Direccion'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Efectivo:</b> <a class="float-right">{{ $results[0]['GoDaddy_Efectivo'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Cheque:</b> <a class="float-right">{{ $results[0]['GoDaddy_Cheque'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Visa:</b> <a class="float-right">{{ $results[0]['GoDaddy_Visa'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>MasterCard:</b> <a class="float-right">{{ $results[0]['GoDaddy_MasterCard'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>American Express:</b> <a class="float-right">{{ $results[0]['GoDAddy_American_Express'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Transferencia Electrónica:</b> <a class="float-right">{{ $results[0]['GoDaddy_Transferencia_Electronica'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Otras formas de Pago:</b> <a class="float-right">{{ $results[0]['Godaddy_Otras_formas_de_Pago'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Drive:</b> <a class="float-right">{{ $results[0]['GoDaddy_Drive'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Redes Sociales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Redes_Sociales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Instrucciones Adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Instrucciones_Adicionales_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Materiales Adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Materiales_Adicionales_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Notas Seccion 1 P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P1 - Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P1_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P2 - Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P2_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Notas - Seccion 2 P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P2 - Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P2_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Notas - Seccion 2 P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P3 - Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P3_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P4 - Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P4_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 1 P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Seccion 1 P5 Notas adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P5_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ExtraPage Seccion 2 P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Producto 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Descripción 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Categoría 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Costo 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Inventario 1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Producto 2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Descripción 2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Categoría 2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Costo 2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Inventario 2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Producto 3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Descripción 3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Categoría 3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Descripción 3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Costo 3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Inventario 3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_3'] }}</a>
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