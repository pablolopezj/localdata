@extends('layouts.top-nav')

@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Detalle de tarea - En Digital <small></small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tarea</a></li>
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
                                                <th>Proyecto:</th>
                                                <td>{{ $results[0]['Proyecto'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sales Order:</th>
                                                <td>{{ $results[0]['Sales_Order'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Business Partner:</th>
                                                <td>{{ $results[0]['Business_Partner'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de inicio:</th>
                                                <td>{{ $results[0]['Fecha_de_inicio'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Fecha de finalización:</th>
                                                <td>{{ $results[0]['Fecha_de_finalizacion'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Contacto</th>
                                                <td>{{ $results[0]['Contacto'] }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Email:</th>
                                                <td>{{ $results[0]['Email'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Phone</th>
                                                <td>{{ $results[0]['Phone'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sales Order:</th>
                                                <td>{{ $results[0]['Sales_Order_EnDigital'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Tipo de restriccion:</th>
                                                <td>{{ $results[0]['Tipo_de_restriccion'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Associated SKU:</th>
                                                <td>{{ $results[0]['Associated_SKU'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Resource Allocated:</th>
                                                <td>{{ $results[0]['Resource_Allocated'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Supervisor Asignado:</th>
                                                <td>{{ $results[0]['Supervisor_Asignado'] }}</td>
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
                                                            <b>Line of Business:</b> <a class="float-right">{{ $results[0]['Line_of_Business'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Slogan:</b> <a class="float-right">{{ $results[0]['Slogan'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Call to action:</b> <a class="float-right">{{ $results[0]['Call_to_action'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Logos:</b> <a class="float-right">{{ $results[0]['Logos'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>E-mail for Contact Form:</b> <a class="float-right">{{ $results[0]['E-mail_for_Contact_Form'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Products and Services:</b> <a class="float-right">{{ $results[0]['Products_and_Services'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Benefits:</b> <a class="float-right">{{ $results[0]['Benefits'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Testimonials:</b> <a class="float-right">{{ $results[0]['Testimonials'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Long Description:</b> <a class="float-right">{{ $results[0]['Long_Description'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Promo:</b> <a class="float-right">{{ $results[0]['Promo'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>City Main:</b> <a class="float-right">{{ $results[0]['City_Main'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Ciudades de cobertura:</b> <a class="float-right">{{ $results[0]['Ciudades_de_cobertura'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Horarios de atencion:</b> <a class="float-right">{{ $results[0]['Horarios_de_atencion'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Metodos de pago:</b> <a class="float-right">{{ $results[0]['Metodos_de_pago'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Comentarios adicionales:</b> <a class="float-right">{{ $results[0]['Comentarios_adicionales'] }}</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-group list-group-unbordered mb-3">
                                                        <li class="list-group-item">
                                                            <b>Cambio adicional:</b> <a class="float-right">{{ $results[0]['1_Cambio_adicional'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Cambios adicionales:</b> <a class="float-right">{{ $results[0]['3_Cambios_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Google my business:</b> <a class="float-right">{{ $results[0]['Google_my_business'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Paqueteanimes:</b> <a class="float-right">{{ $results[0]['Paqueteanimes'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Correo profesional:</b> <a class="float-right">{{ $results[0]['Correo_profesional'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Video anuncio:</b> <a class="float-right">{{ $results[0]['Video_anuncio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Pestaña adicional:</b> <a class="float-right">{{ $results[0]['Pestaña_adicional'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Dominio:</b> <a class="float-right">{{ $results[0]['Dominio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Bloque de 40 Imgs Adicionales:</b> <a class="float-right">{{ $results[0]['Bloque_de_40_imgs_adicionales'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Alojamiento por año:</b> <a class="float-right">{{ $results[0]['Alojamiento_por_anio'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Mi negocio impreso:</b> <a class="float-right">{{ $results[0]['Mi_negocio_impreso'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Facebook Fanpage:</b> <a class="float-right">{{ $results[0]['Facebook_Fanpage'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Toppings Comentarios:</b> <a class="float-right">{{ $results[0]['Toppings_Comentarios'] }}</a>
                                                        </li>
                                                        <li class="list-group-item">
                                                            <b>Change is because of a mistake:</b> <a class="float-right">{{ $results[0]['Change_is_because_of_a_mistake'] }}</a>
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