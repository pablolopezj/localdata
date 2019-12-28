@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Tarea Claro <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
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
                                                <th>Sales_Order:</th>
                                                <td>{{ $results[0]['Sales_Order'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Associated_SKU:</th>
                                                <td>{{ $results[0]['Associated_SKU'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Proyecto:</th>
                                                <td>{{ $results[0]['Proyecto'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>PartnerBU</th>
                                                <td>{{ $results[0]['PartnerBU'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>GoDaddy_Giro_Empresa_Texto:</th>
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
                                            <a class="nav-link active" id="vip-content-tab" data-toggle="pill" href="#vip-content" role="tab" aria-controls="vip-content" aria-selected="true">VIP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-profile" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Data</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <div class="tab-pane fade show active" id="vip-content" role="tabpanel" aria-labelledby="vip-content-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Giro Empresa Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Giro_Empresa_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_Comercial_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_Comercial_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Slogan_Basic_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Slogan_Basic_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>A_que_sector_va_dirigido_su_sitio_web:</b> <a class="float-right">{{ $results[0]['A_que_sector_va_dirigido_su_sitio_web'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Item_mas_Importante_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Item_mas_Importante_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Promo_Basic_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Promo_Basic_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_About_Opcional_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_About_Opcional_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Equipo1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Equipo1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Frase_Standard_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Frase_Standard_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Calle:</b> <a class="float-right">{{ $results[0]['GoDaddy_Calle'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Num_Ext:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Ext'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Num_Int:</b> <a class="float-right">{{ $results[0]['GoDaddy_Num_Int'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Colonia:</b> <a class="float-right">{{ $results[0]['GoDaddy_Colonia'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ciudad:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ciudad'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Pais:</b> <a class="float-right">{{ $results[0]['GoDaddy_Pais'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Estado:</b> <a class="float-right">{{ $results[0]['GoDaddy_Estado'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Codigo_Postal:</b> <a class="float-right">{{ $results[0]['GoDaddy_Codigo_Postal'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Mapa_de_Sitio:</b> <a class="float-right">{{ $results[0]['GoDaddy_Mapa_de_Sitio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Aviso_de_Privacidad:</b> <a class="float-right">{{ $results[0]['GoDaddy_Aviso_de_Privacidad'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Horarios_Abierto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Horarios_Abierto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Notas_adicionales_para_direcciones:</b> <a class="float-right">{{ $results[0]['GoDaddy_Notas_adicionales_para_direcciones'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Notas_adicionales_para_telefono:</b> <a class="float-right">{{ $results[0]['GoDaddy_Notas_adicionales_para_telefono'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Email_Contacto_Direccion:</b> <a class="float-right">{{ $results[0]['GoDaddy_Email_Contacto_Direccion'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Efectivo:</b> <a class="float-right">{{ $results[0]['GoDaddy_Efectivo'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Cheque:</b> <a class="float-right">{{ $results[0]['GoDaddy_Cheque'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Visa:</b> <a class="float-right">{{ $results[0]['GoDaddy_Visa'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_MasterCard:</b> <a class="float-right">{{ $results[0]['GoDaddy_MasterCard'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDAddy_American_Express:</b> <a class="float-right">{{ $results[0]['GoDAddy_American_Express'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Transferencia_Electronica:</b> <a class="float-right">{{ $results[0]['GoDaddy_Transferencia_Electronica'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Godaddy_Otras_formas_de_Pago:</b> <a class="float-right">{{ $results[0]['Godaddy_Otras_formas_de_Pago'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Drive:</b> <a class="float-right">{{ $results[0]['GoDaddy_Drive'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Redes_Sociales</b> <a class="float-right">{{ $results[0]['GoDaddy_Redes_Sociales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Instrucciones_Adicionales_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Instrucciones_Adicionales_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Materiales_Adicionales_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Materiales_Adicionales_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Seccion_1_P1_Notas_adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P1_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Seccion_1_P2_Notas_adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P2_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Seccion_1_P2_Notas_adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P2_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Seccion_1_P3_Notas_adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P3_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Seccion_1_P4_Notas_adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P4_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Seccion_1_P5_Notas_adicionales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Seccion_1_P5_Notas_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Producto_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Producto_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Descripcion_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Categoria_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Categoria_1'] }}</a>
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
                                                            <b>GGoDaddy_Costo_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_2'] }}</a>
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
                                                            <b>GoDaddy_Descripcion_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Descripcion_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Costo_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Costo_3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Inventario_3:</b> <a class="float-right">{{ $results[0]['GoDaddy_Inventario_3'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel" aria-labelledby="custom-content-below-profile-tab">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th scope="col">FIELD</th>
                                                        <th scope="col">VALUE</th>
                                                    </tr>
                                                    <?php $a_result = json_decode($results); ?>
                                                    @foreach($a_result[0] as $index => $value )
                                                    <tr>
                                                        <td><strong>{{ $index }}</strong></td>
                                                        <td>{{ $value }}</td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
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