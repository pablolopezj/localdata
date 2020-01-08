@extends('layouts.top-nav')

@section('styles')
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection


@section('content')
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark"> Busqueda <small>Tareas Godaddy</small></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Tareas</a></li>
                    <li class="breadcrumb-item active">Godaddy </li>
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
                        <h3 class="card-title">Buscar Tareas Godaddy</h3>
                    </div>
                    <div class="card-body">
                        <table id="tasks" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Associated SKU</th>
                                    <th>Status</th>
                                    <th>Virket ID</th>
                                    <th>Supervisor Asignado</th>
                                    <th>Resource Allocated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Associated SKU</th>
                                    <th>Status</th>
                                    <th>Virket ID</th>
                                    <th>Supervisor Asignado</th>
                                    <th>Resource Allocated</th>
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
            ajax: '/godaddy/feed',
            "columns": [{
                    "data": "Nombre"
                },
                {
                    "data": "Email"
                },
                {
                    "data": "Associated_SKU"
                },
                {
                    "data": "Project_Task_Status"
                },
                {
                    "data": "Virket_ID"
                },
                {
                    "data": "Supervisor_Asignado"
                },
                {
                    "data": "Resource_Allocated"
                },
                {
                    "data": null,
                    "bSortable": false,
                    "mRender": function(d) {
                        return '<a href="/godaddy/tarea/' + d.Internal_ID + '" ><i class="fas fa-eye"></i></a>';
                    }
                }
            ],

        });
    });
</script>
@endsection