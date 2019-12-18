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
                            <h3 class="card-title">{{ $results[0]['Name'] }}</h3>
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
                                                <td>{{ $results[0]['Name'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Project</th>
                                                <td>{{ $results[0]['Project'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Start date:</th>
                                                <td>{{ $results[0]['Start_Date'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Status:</th>
                                                <td>{{ $results[0]['Status'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Ticket Type</th>
                                                <td>{{ $results[0]['Ticket_Type'] }}</td>
                                            </tr>
                                            <tr>
                                                <th>Virket ID:</th>
                                                <td>{{ $results[0]['Virket_ID'] }}</td>
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
                                    </ul>
                                    <div class="tab-content" id="custom-content-below-tabContent">
                                        <div class="tab-pane fade show active" id="vip-content" role="tabpanel" aria-labelledby="vip-content-tab">
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
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection