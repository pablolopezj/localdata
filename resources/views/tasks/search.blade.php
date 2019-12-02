@extends('layouts.mainlayout')

@section('styles')
<link rel="stylesheet" href="http://ui-grid.info/release/ui-grid.css" type="text/css">
<link href="assets/css/main.css" rel="stylesheet" />
@endsection

@section('scripts')
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular-touch.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular-animate.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.7.0/angular-aria.js"></script>
<script src="http://ui-grid.info/docs/grunt-scripts/csv.js"></script>
<script src="http://ui-grid.info/docs/grunt-scripts/pdfmake.js"></script>
<script src="http://ui-grid.info/docs/grunt-scripts/vfs_fonts.js"></script>
<script src="http://ui-grid.info/docs/grunt-scripts/lodash.min.js"></script>
<script src="http://ui-grid.info/docs/grunt-scripts/jszip.min.js"></script>
<script src="http://ui-grid.info/docs/grunt-scripts/excel-builder.dist.js"></script>
<script src="http://ui-grid.info/release/ui-grid.js"></script>
<script src="assets/js/app.js" type="text/javascript"></script>
@endsection

@section('content')
<div class="content">
    <div class=" container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div ng-controller="MainCtrl as $ctrl">
                    <div id="grid1" ui-grid="{ data: $ctrl.myData }" class="grid"></div>
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection