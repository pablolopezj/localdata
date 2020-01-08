@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Detalle de Ticket - Godaddy <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tickets</a></li>
                    <li class="breadcrumb-item active"> Godaddy </li>
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
                                                <th> Articulo:</th>
                                                <td>{{ $results[0]->Articulo }}</td>
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
                                                <td>{{ $results[0]->Correo_electronico }}</td>
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
                                                <th>Asignado a:</th>
                                                <td>{{ $results[0]->Asignado_a }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pipedrive_ID_Deal:</th>
                                                <td>{{ $results[0]->Pipedrive_ID_Deal }}</td>
                                            </tr>
                                            <tr>
                                                <th>Virket_ID:</th>
                                                <td>{{ $results[0]->Virket_ID }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="serv-prod-tab" data-toggle="pill" href="#serv-prod-content" role="tab" aria-controls="serv-prod-content" aria-selected="true">Serv. o Prod.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="vip-sitio-tab" data-toggle="pill" href="#vip-sitio-content" role="tab" aria-controls="vip-sitio-content" aria-selected="false">VIP sitio.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="vip-wordpress-tab" data-toggle="pill" href="#vip-wordpress-content" role="tab" aria-controls="vip-wordpress-content" aria-selected="false">VIP Wordpress.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="datos-negocio-tab" data-toggle="pill" href="#datos-negocio-content" role="tab" aria-controls="datos-negocio-content" aria-selected="false">Datos de negocio.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="e-commerce-tab" data-toggle="pill" href="#e-commerce-content" role="tab" aria-controls="e-commerce-content" aria-selected="false">E-commerce.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="blog-tab" data-toggle="pill" href="#blog-content" role="tab" aria-controls="blog-content" aria-selected="false">Blog.</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pagina-tab" data-toggle="pill" href="#pagina-content" role="tab" aria-controls="pagina-content" aria-selected="false">Pagina.</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <!-- Servicio o producto -->
                                        <div class="tab-pane fade show active" id="serv-prod-content" role="tabpanel" aria-labelledby="serv-prod-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Giro_Empresa_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Giro_Empresa_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Nombre_Comercial_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Nombre_Comercial_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>A_que_sector_va_dirigido_su_sitio_web:</b> <a class="float-right">{{ $results[0]->A_que_sector_va_dirigido_su_sitio_web }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Item_mas_Vendido_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Item_mas_Vendido_Texto }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Item_mas_Importante_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Item_mas_Importante_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Experiencia_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Experiencia_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_About_Opcional_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_About_Opcional_Texto }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- VIP Sitio -->
                                        <div class="tab-pane fade " id="vip-sitio-content" role="tabpanel" aria-labelledby="vip-sitio-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Slogan_Basic_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Slogan_Basic_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Promo_Basic_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Promo_Basic_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Frase_Standard_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Frase_Standard_Texto }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Testimonial_Standard_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Testimonial_Standard_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Slogan_Standard_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Slogan_Standard_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Promo_Standard_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Promo_Standard_Texto }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Wordpress -->
                                        <div class="tab-pane fade " id="vip-wordpress-content" role="tabpanel" aria-labelledby="vip-wordpress-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Frase_WordPress_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Frase_WordPress_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Testimonial_WordPress_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Testimonial_WordPress_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Promo_WordPress_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Promo_WordPress_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Slogan_WordPress_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Slogan_WordPress_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Paquetes_WordPress_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Paquetes_WordPress_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Equipo_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Equipo_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Que_es_lo_que_querIan_lograr_solucionar:</b> <a class="float-right">{{ $results[0]->GoDaddy_Que_es_lo_que_querIan_lograr_solucionar }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Quien_fundo_la_empresa:</b> <a class="float-right">{{ $results[0]->GoDaddy_Quien_fundo_la_empresa }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Como_llegaron_que_tienen_hoy_en_dia:</b> <a class="float-right">{{ $results[0]->GoDaddy_Como_llegaron_que_tienen_hoy_en_dia }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Que_le_gustaria_llegar_a_ser:</b> <a class="float-right">{{ $results[0]->GoDaddy_Que_le_gustaria_llegar_a_ser }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Tienen_alguna_iniciativa:</b> <a class="float-right">{{ $results[0]->GoDaddy_Tienen_alguna_iniciativa }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Mision:</b> <a class="float-right">{{ $results[0]->GoDaddy_Mision }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Vision:</b> <a class="float-right">{{ $results[0]->GoDaddy_Vision }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Valores:</b> <a class="float-right">{{ $results[0]->GoDaddy_Valores }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Datos de negocio -->
                                        <div class="tab-pane fade " id="datos-negocio-content" role="tabpanel" aria-labelledby="datos-negocio-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Calle:</b> <a class="float-right">{{ $results[0]->GoDaddy_Calle }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Num_Ext:</b> <a class="float-right">{{ $results[0]->GoDaddy_Num_Ext }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Num_Int:</b> <a class="float-right">{{ $results[0]->GoDaddy_Num_Int }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Colonia:</b> <a class="float-right">{{ $results[0]->GoDaddy_Colonia }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ciudad:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ciudad }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Pais:</b> <a class="float-right">{{ $results[0]->GoDaddy_Pais }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Estado:</b> <a class="float-right">{{ $results[0]->GoDaddy_Estado }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Codigo_Postal:</b> <a class="float-right">{{ $results[0]->GoDaddy_Codigo_Postal }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Mapa_de_Sitio:</b> <a class="float-right">{{ $results[0]->GoDaddy_Mapa_de_Sitio }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Aviso_de_Privacidad:</b> <a class="float-right">{{ $results[0]->GoDaddy_Aviso_de_Privacidad }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Horarios_Abierto_Texto:</b> <a class="float-right">{{ $results[0]->GoDaddy_Horarios_Abierto_Texto }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Notas_adicionales_para_direcciones:</b> <a class="float-right">{{ $results[0]->GoDaddy_Notas_adicionales_para_direcciones }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_1:</b> <a class="float-right">{{ $results[0]->GoDaddy_Telefono_1 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_2:</b> <a class="float-right">{{ $results[0]->GoDaddy_Telefono_2 }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_3:</b> <a class="float-right">{{ $results[0]->GoDaddy_Telefono_3 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Notas_adicionales_para_telefono:</b> <a class="float-right">{{ $results[0]->GoDaddy_Notas_adicionales_para_telefono }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Email_Contacto_Direccion:</b> <a class="float-right">{{ $results[0]->GoDaddy_Email_Contacto_Direccion }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Efectivo:</b> <a class="float-right">{{ $results[0]->GoDaddy_Efectivo }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Cheque:</b> <a class="float-right">{{ $results[0]->GoDaddy_Cheque }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Visa:</b> <a class="float-right">{{ $results[0]->GoDaddy_Visa }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_MasterCard:</b> <a class="float-right">{{ $results[0]->GoDaddy_MasterCard }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDAddy_American_Express:</b> <a class="float-right">{{ $results[0]->GoDAddy_American_Express }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Transferencia_Electronica:</b> <a class="float-right">{{ $results[0]->GoDaddy_Transferencia_Electronica }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Godaddy_Otras_formas_de_Pago:</b> <a class="float-right">{{ $results[0]->Godaddy_Otras_formas_de_Pago }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Drive:</b> <a class="float-right">{{ $results[0]->GoDaddy_Drive }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Redes_Sociales:</b> <a class="float-right">{{ $results[0]->GoDaddy_Redes_Sociales }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Instrucciones_Adicionales:</b> <a class="float-right">{{ $results[0]->GoDaddy_Instrucciones_Adicionales }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Materiales_Adicionales:</b> <a class="float-right">{{ $results[0]->GoDaddy_Materiales_Adicionales }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- E-commerce -->
                                        <div class="tab-pane fade " id="e-commerce-content" role="tabpanel" aria-labelledby="e-commerce-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Giro_Empresa:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ecommerce_Giro_Empresa }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Nombre_Comercial:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ecommerce_Nombre_Comercial }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Experiencia:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ecommerce_Experiencia }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Frase:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ecommerce_Frase }}</a>
                                                        </li>


                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Testimonial:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ecommerce_Testimonial }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Slogan:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ecommerce_Slogan }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_SKU:</b> <a class="float-right">{{ $results[0]->GoDaddy_Ecommerce_SKU }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Blog -->
                                        <div class="tab-pane fade " id="blog-content" role="tabpanel" aria-labelledby="blog-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Titulo:</b> <a class="float-right">{{ $results[0]->GoDaddy_Blog_Titulo }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Estilo_del_Indice:</b> <a class="float-right">{{ $results[0]->GoDaddy_Estilo_del_Indice }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Comentarios_Articulos:</b> <a class="float-right">{{ $results[0]->GoDaddy_Blog_Comentarios_Articulos }}</a>
                                                        </li>


                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Side_Bar:</b> <a class="float-right">{{ $results[0]->GoDaddy_Blog_Side_Bar }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Estilo_del_Articulo:</b> <a class="float-right">{{ $results[0]->GoDaddy_Blog_Estilo_del_Articulo }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Página -->
                                        <div class="tab-pane fade " id="pagina-content" role="tabpanel" aria-labelledby="pagina-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P1:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_1_P1 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P1:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_2_P1 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P1:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_3_P1 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P2:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_1_P2 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSección_2_P2:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSección_2_P2 }}</a>
                                                        </li>


                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P2:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_3_P2 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P3:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_1_P3 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P3:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_2_P3 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P3:</b> <a class="float-right">{{ $results[0]->GoDaddy_ExtraPage_NotasSeccion_3_P3 }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>ID_Cliente_LLC:</b> <a class="float-right">{{ $results[0]->ID_Cliente_LLC }}</a>
                                                        </li>
                                                    </ul>
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