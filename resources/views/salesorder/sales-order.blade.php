@extends('layouts.top-nav')

@section('styles')
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<style >
    .dxls {
        display: block;
        width: 100%;
        text-align: right;
    }
    .dxls img {
        width: 2rem;
        height: 2rem;
    }
</style>
@endsection


@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Busqueda <small>Sales Order</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Sales Order</a></li>
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
                <!-- start grid -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Buscar Sales Orders</h3>
                        <div class="dxls">
                            <a href="/report/sales-order" alt="Download xls">
                                 <img src="/assets/img/descargaxls.png" alt="Descargar excel" >
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="tasks" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Period</th>
                                    <th>Representante</th>
                                    <th>Virket_ID</th>
                                    <th>Account</th>
                                    <th>Importe</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Period</th>
                                    <th>Representante</th>
                                    <th>Virket_ID</th>
                                    <th>Account</th>
                                    <th>Importe</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <!-- end grid -->
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {


        $('#tasks').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/feed/salesorder',
            columns: [{
                    "data": "Nombre"
                },
                {
                    "data": "Fecha"
                },
                {
                    "data": "Periodo"
                },
                {
                    "data": "Representante_de_ventas"
                },
                {
                    "data": "Virket_ID"
                },
                {
                    "data": "Cuenta"
                },
                {
                    "data": "Importe"
                },
                {
                    "data": null,
                    "bSortable": false,
                    "mRender": function(d) {
                        return '<a href="/salesorder/' + d.Internal_ID + '" ><i class="fas fa-eye"></i></a>';
                    }
                }
            ],

        });
    });
</script>
@endsection
