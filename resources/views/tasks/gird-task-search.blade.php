@extends('layouts.admin')

@section('styles')
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script type="text/javascript">
    var grid, dialog;

    function Edit(e) {
        $('#ID').val(e.data.id);
        $('#Name').val(e.data.record.Name);
        $('#PlaceOfBirth').val(e.data.record.PlaceOfBirth);
        dialog.open('Edit Player');
    }

    function Save() {
        var record = {
            ID: $('#ID').val(),
            Name: $('#Name').val(),
            PlaceOfBirth: $('#PlaceOfBirth').val()
        };
        $.ajax({
                url: '/Players/Save',
                data: {
                    record: record
                },
                method: 'POST'
            })
            .done(function() {
                dialog.close();
                grid.reload();
            })
            .fail(function() {
                alert('Failed to save.');
                dialog.close();
            });
    }

    function Delete(e) {
        if (confirm('Are you sure?')) {
            $.ajax({
                    url: '/Players/Delete',
                    data: {
                        id: e.data.id
                    },
                    method: 'POST'
                })
                .done(function() {
                    grid.reload();
                })
                .fail(function() {
                    alert('Failed to delete.');
                });
        }
    }
    $(document).ready(function() {
        grid = $('#grid').grid({
            primaryKey: 'ID',
            dataSource: '/tasks',
            uiLibrary: 'bootstrap',
            columns: [{
                    field: 'Internal ID',
                    width: 100
                },
                {
                    field: 'Name',
                    sortable: true
                },
                {
                    field: 'Project',
                    title: 'Project',
                    sortable: true
                },
                {
                    title: '',
                    field: 'Edit',
                    width: 34,
                    type: 'icon',
                    icon: 'glyphicon glyphicon-eye-open',
                    tooltip: 'Edit',
                    events: {
                        'click': Edit
                    }
                }
            ],
            pager: {
                limit: 20,
                sizes: [20,50]
            }
        });
        dialog = $('#dialog').dialog({
            uiLibrary: 'bootstrap',
            autoOpen: false,
            resizable: false,
            modal: true
        });
        $('#btnAdd').on('click', function() {
            $('#ID').val('');
            $('#Name').val('');
            $('#PlaceOfBirth').val('');
            dialog.open('Add Player');
        });
        $('#btnSave').on('click', Save);
        $('#btnCancel').on('click', function() {
            dialog.close();
        });
        $('#btnSearch').on('click', function() {
            grid.reload({
                name: $('#txtName').val(),
                placeOfBirth: $('#txtPlaceOfBirth').val()
            });
        });
        $('#btnClear').on('click', function() {
            $('#txtName').val('');
            $('#txtPlaceOfBirth').val('');
            grid.reload({
                name: '',
                placeOfBirth: ''
            });
        });
    });
</script>
@endsection

@section('content')
<div class="content">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- Start grid -->
                <div class="container-full">
                    <div class="row">
                        <div class="col-xs-8">
                            <form class="form-inline">
                                <div class="form-group">
                                    <input id="txtName" type="text" placeholder="Name..." class="form-control" />
                                    <input id="txtPlaceOfBirth" type="text" placeholder="Place Of Birth..." class="form-control" />
                                </div>
                                <button id="btnSearch" type="button" class="btn btn-default">Search</button>
                                <button id="btnClear" type="button" class="btn btn-default">Clear</button>
                            </form>
                        </div>
                        <div class="col-xs-4">
                            <button id="btnAdd" type="button" class="btn btn-default pull-right">Add New Record</button>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px">
                        <div class="col-xs-12">
                            <table id="grid"></table>
                        </div>
                    </div>
                </div>

                <div id="dialog" style="display: none">
                    <input type="hidden" id="ID" />
                    <form>
                        <div class="form-group">
                            <label for="Name">Name</label>
                            <input type="text" class="form-control" id="Name">
                        </div>
                        <div class="form-group">
                            <label for="PlaceOfBirth">Place Of Birth</label>
                            <input type="text" class="form-control" id="PlaceOfBirth" />
                        </div>
                        <button type="button" id="btnSave" class="btn btn-default">Save</button>
                        <button type="button" id="btnCancel" class="btn btn-default">Cancel</button>
                    </form>
                </div>
                <!-- End gird -->
            </div>
        </div>
    </div>
</div>
@endsection