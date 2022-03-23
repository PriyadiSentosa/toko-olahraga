@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <center><h3 class="m-0"><b>Data Supplier</b></h3></center>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Supplier</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for=""> Nama Supplier</label>
                        <input type="text" name="nama" value="{{$suplier->nama}}" class="form-control" readonly>
                    </div>
                     <div class="form-group">
                        <label for=""> Alamat</label>
                        <input type="text" name="alamat" value="{{$suplier->alamat}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/suplier')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
