@extends('layouts.top-nav')

@section('styles')
<link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
@endsection


@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- start grid -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Buscar Tareas</h3>
                    </div>
                    <div class="card-body">
                        <table id="tasks" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Project</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Virket ID</th>
                                    <th>Supervisor Asignado</th>
                                    <th>Resource Allocated</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Project</th>
                                    <th>Start Date</th>
                                    <th>Status</th>
                                    <th>Virket ID</th>
                                    <th>Supervisor Asignado</th>
                                    <th>Resource Allocated</th>
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
                "pageLength": 10,
                "ajax": '/tasks',
                "columns": [
                    {
                        "data": "Name"
                    },
                    {
                        "data": "Project"
                    },
                    {
                        "data": "Start Date"
                    },
                    {
                        "data": "Status"
                    },
                    {
                        "data": "Virket ID"
                    },
                    {
                        "data": "Supervisor Asignado"
                    },
                    {
                        "data": "Resource Allocated"
                    }
                ],

            });
        });
    </script>
    @endsection