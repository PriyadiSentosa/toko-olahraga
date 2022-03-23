@extends('layouts.admin')


@section('header')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active">Dashboard</li>
    </ol>
</div>
<!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
</div>
<!--/.row-->
@endsection

@section('content')
<div class="panel panel-container">

    <div class="row">
         <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                    <div class="large">
                     {{$suplier = DB::table('users')->count();}}
                    </div>
                    <div class="text-muted">Data User</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-teal panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-users color-blue"></em>
                    <div class="large">
                     {{$suplier = DB::table('supliers')->count();}}
                    </div>
                    <div class="text-muted">Data Supplier</div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3 col-lg-3 no-padding">
            <div class="panel panel-blue panel-widget border-right">
                <div class="row no-padding"><em class="fa fa-xl fa-dropbox color-orange"></em>
                    <div class="large">
                    {{$barang = DB::table('barangs')->count();}}

                    </div>

                    <div class="text-muted">Total Data Barang</div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--/.row-->


<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
            Calendar
            <ul class="pull-right panel-settings panel-button-tab-right">
                <li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
                        <em class="fa fa-cogs"></em>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <ul class="dropdown-settings">
                                <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 1
                                    </a></li>
                                <li class="divider"></li>
                                <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 2
                                    </a></li>
                                <li class="divider"></li>
                                <li><a href="#">
                                        <em class="fa fa-cog"></em> Settings 3
                                    </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
        <div class="panel-body">
            <div id="calendar"></div>
        </div>
    </div>

</div>
<!--/.col-->
<br>
@endsection

