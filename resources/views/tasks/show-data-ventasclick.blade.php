@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Tarea Ventas Click <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active"> Ventas Click </li>
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
                                                <th>Project</th>
                                                <td>{{ $results[0]['Proyecto'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $results[0]['Email'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Phone:</th>
                                                <td>{{ $results[0]['Phone'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sales Order</th>
                                                <td>{{ $results[0]['Sales_Order'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Associated SKU:</th>
                                                <td>{{ $results[0]['Associated_SKU'] }}</td>
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
                            <!-- Tabs -->
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="servicios-prod-tab" data-toggle="pill" href="#servicios-prod" role="tab" aria-controls="servicios-prod" aria-selected="true">Servicios y productos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="sitio-basico-tab" data-toggle="pill" href="#sitio-basico" role="tab" aria-controls="sitio-basico" aria-selected="true">Sitio Básico</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="sitio-standar-tab" data-toggle="pill" href="#sitio-standar" role="tab" aria-controls="sitio-standar" aria-selected="true">Sitio Standar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="wordpress-tab" data-toggle="pill" href="#wordpress" role="tab" aria-controls="wordpress" aria-selected="true">Wordpress</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="negocio-empresa-tab" data-toggle="pill" href="#negocio-empresa" role="tab" aria-controls="negocio-empresa" aria-selected="true">Negocio Empresa</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="ecommerce-tab" data-toggle="pill" href="#ecommerce" role="tab" aria-controls="ecommerce" aria-selected="true">E-commerce</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="blog-tab" data-toggle="pill" href="#blog" role="tab" aria-controls="blog" aria-selected="true">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pagina-extra-tab" data-toggle="pill" href="#pagina-extra" role="tab" aria-controls="pagina-extra" aria-selected="true">Paginas extra</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <!-- Servicios y productos -->
                                        <div class="tab-pane fade show active" id="servicios-prod" role="tabpanel" aria-labelledby="servicios-prod-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Giro de la Empresa:</b> <a class="float-right">{{ $results[0]['GoDaddy_Giro_Empresa_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Nombre Comercial:</b> <a class="float-right">{{ $results[0]['GoDaddy_Nombre_Comercial_Texto'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Ítem mas Vendido:</b> <a class="float-right">{{ $results[0]['GoDaddy_Item_mas_Vendido_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>About Opcional:</b> <a class="float-right">{{ $results[0]['GoDaddy_About_Opcional_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sitio basico -->
                                        <div class="tab-pane fade" id="sitio-basico" role="tabpanel" aria-labelledby="sitio-basico-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Slogan_Basic:</b> <a class="float-right">{{ $results[0]['GoDaddy_Slogan_Basic_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Promo Basic:</b> <a class="float-right">{{ $results[0]['GoDaddy_Promo_Basic_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sitio standar -->
                                        <div class="tab-pane fade" id="sitio-standar" role="tabpanel" aria-labelledby="sitio-standar-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Frase_Standard_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Frase_Standard_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Testimonial_Standard_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Testimonial_Standard_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Slogan Standard:</b> <a class="float-right">{{ $results[0]['GoDaddy_Slogan_Standard_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Promo Standard:</b> <a class="float-right">{{ $results[0]['GoDaddy_Promo_Standard_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Wordpress -->
                                        <div class="tab-pane fade" id="wordpress" role="tabpanel" aria-labelledby="wordpress-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Frase_WordPress:</b> <a class="float-right">{{ $results[0]['GoDaddy_Frase_WordPress_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Testimonial_WordPress:</b> <a class="float-right">{{ $results[0]['GoDaddy_Testimonial_WordPress_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Promo_WordPress:</b> <a class="float-right">{{ $results[0]['GoDaddy_Promo_WordPress_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Slogan_WordPress:</b> <a class="float-right">{{ $results[0]['GoDaddy_Slogan_WordPress_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Paquetes_WordPress:</b> <a class="float-right">{{ $results[0]['GoDaddy_Paquetes_WordPress_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Equipo:</b> <a class="float-right">{{ $results[0]['GoDaddy_Equipo_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>¿Qué es lo que querían solucionar?:</b> <a class="float-right">{{ $results[0]['GoDaddy_Que_es_lo_que_querian_solucionar'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>¿Quíen fundó la empresa?:</b> <a class="float-right">{{ $results[0]['GoDaddy_Quien_fundo_la_empresa'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Como llegaron?:</b> <a class="float-right">{{ $results[0]['GoDaddy_Como_llegaron'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>¿Qué le gustaría que la empresa llegara a ser?:</b> <a class="float-right">{{ $results[0]['GoDaddy_Que_le_gustaria'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>¿Tienen algún programa o iniciativa para ayudar a la comunidad de empleados?:</b> <a class="float-right">{{ $results[0]['GoDaddy_Tienen_algun_pr'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Misión:</b> <a class="float-right">{{ $results[0]['GoDaddy_Mision'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Visión:</b> <a class="float-right">{{ $results[0]['GoDaddy_Vision'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Valores:</b> <a class="float-right">{{ $results[0]['GoDaddy_Valores'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Negocio ó empresa -->
                                        <div class="tab-pane fade" id="negocio-empresa" role="tabpanel" aria-labelledby="negocio-empresa-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
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
                                                            <b>GoDaddy_Horarios_Abierto_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Horarios_Abierto_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Notas_adicionales_para_direccio:</b> <a class="float-right">{{ $results[0]['GoDaddy_Notas_adicionales_para_direccio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_1:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Telefono_2:</b> <a class="float-right">{{ $results[0]['GoDaddy_Telefono_2'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
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
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Redes_Sociales:</b> <a class="float-right">{{ $results[0]['GoDaddy_Redes_Sociales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Instrucciones_Adicionales_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Instrucciones_Adicionales_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Materiales_Adicionales_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Materiales_Adicionales_Texto'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- E-commerce -->
                                        <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_E-commerce_Negocio:</b> <a class="float-right">{{ $results[0]['GoDaddy_E-commerce_Negocio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_E-commerce_Historia:</b> <a class="float-right">{{ $results[0]['GoDaddy_E-commerce_Historia'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_E-commerce_Expectativa_Cliente:</b> <a class="float-right">{{ $results[0]['GoDaddy_E-commerce_Expectativa_Cliente'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_E-commerce_Interes_Cliente:</b> <a class="float-right">{{ $results[0]['GoDaddy_E-commerce_Interes_Cliente'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Giro_Empresa_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_Giro_Empresa_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Nombre_Comercial_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_Nombre_Comercial_Texto'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Experiencia_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_Experiencia_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Frase_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_Frase_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Testimonial_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_Testimonial_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_Slogan_Texto:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_Slogan_Texto'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Ecommerce_SKU:</b> <a class="float-right">{{ $results[0]['GoDaddy_Ecommerce_SKU'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Blog -->
                                        <div class="tab-pane fade" id="blog" role="tabpanel" aria-labelledby="blog-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Titulo:</b> <a class="float-right">{{ $results[0]['GoDaddy_Blog_Titulo'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Estilo_del_Indice:</b> <a class="float-right">{{ $results[0]['GoDaddy_Estilo_del_Indice'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Comentarios_Articulos:</b> <a class="float-right">{{ $results[0]['GoDaddy_Blog_Comentarios_Articulos'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Side_Bar:</b> <a class="float-right">{{ $results[0]['GoDaddy_Blog_Side_Bar'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_Blog_Estilo_del_Articulo:</b> <a class="float-right">{{ $results[0]['GoDaddy_Blog_Estilo_del_Articulo'] }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Pagina Extra -->
                                        <div class="tab-pane fade" id="pagina-extra" role="tabpanel" aria-labelledby="pagina-extra-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_3_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P1:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_3_P1'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_3_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P2:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_3_P2'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P3'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P3:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_3_P3'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_3_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P4:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_3_P4'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_1_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_1_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_1_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_1_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_2_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_2_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_2_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_2_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_Seccion_3_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_Seccion_3_P5'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>GoDaddy_ExtraPage_NotasSeccion_3_P5:</b> <a class="float-right">{{ $results[0]['GoDaddy_ExtraPage_NotasSeccion_3_P5'] }}</a>
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