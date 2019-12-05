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
                    </div>
                    <div class="card-body">
                        <table id="tasks" class="table table-bordered table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Period</th>
                                    <th>RFC</th>
                                    <th>Virket_ID</th>
                                    <th>Account</th>
                                    <th>Memo</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Date</th>
                                    <th>Period</th>
                                    <th>RFC</th>
                                    <th>Virket_ID</th>
                                    <th>Account</th>
                                    <th>Memo</th>
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

<!-- /.modal -->

<div class="modal fade" id="modal-xl">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tarea</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="main-content">

                </p>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection

@section('scripts')
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function() {


        $('#tasks').DataTable({
            "pageLength": 10,
            "ajax": '/feed/salesorder',
            "columns": [{
                    "data": "Name"
                },
                {
                    "data": "Date"
                },
                {
                    "data": "Period"
                },
                {
                    "data": "RFC"
                },
                {
                    "data": "Virket_ID"
                },
                {
                    "data": "Account"
                },
                {
                    "data": "Memo"
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

    function showdata(d) {
        console.log(d);
    }
</script>
@endsection