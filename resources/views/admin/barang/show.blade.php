@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Barang</h1>
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
                <div class="card-header">Data Barang</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Supplier</label>
                        <input type="text" name="" class="form-control" value="{{$barang->suplier->nama}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Nama Barang</label>
                        <input type="text" name="nama_barang" value="{{$barang->nama_barang}}" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for=""> Harga</label>
                        <input type="number" name="harga" value="{{$barang->harga}}" class="form-control" readonly>

                    </div>
                     <div class="form-group">
                        <label for=""> Stok</label>
                        <input type="text" name="harga" value="{{$barang->harga}}" class="form-control" readonly>

                    </div>
                    <div class="form-group">
                        <label for=""> Thumbnail</label>
                        <br>
                        <img src="{{ $barang->image() }}" style="width:350px; height:350px; padding:10px;" />
                    </div>
                    <div class="form-group">
                        <a href="{{url('admin/barang')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
