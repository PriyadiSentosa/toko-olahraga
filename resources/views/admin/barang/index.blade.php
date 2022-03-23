@extends('layouts.admin')

@section('header')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active"><b><i>Barang</i></b></li>
    </ol>
</div>
<!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b><i>Barang</i></b></h1>
    </div>
</div>
<!--/.row-->
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('DataTables/datatables.min.css') }}">
@endsection

@section('js')
<script src="{{ asset('DataTables/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#barang').DataTable();
    });

</script>
<script src="{{asset('js/sweetalert2.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection

@section('content')
<div class="panel panel-default col-md-12">
    <div class="panel-heading">Barang
        <a href="{{ route('barang.create') }}" class="btn btn-primary" style="float: right;">
            <span class="fa fa-plus">&nbsp;</span> tambah</a>
    </div>
    <div class="panel-body">
        <table id="barang" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                      <th class="text-center">No</th>
                      <th class="text-center">Nama Supplier</th>
                      <th class="text-center">Nama Barang</th>
                      <th class="text-center">harga</th>
                      <th class="text-center">Stok</th>
                      <th class="text-center">Deskripsi</th>
                      <th class="text-center">Thumbnail</th>
                      <th class="text-center">Aksi</th>

                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach ($barang as $data)
                <tr>
                    <td class="text-center">{{$no++}}</td>
                    <td class="text-center">{{$data->suplier->nama}}</td>
                    <td class="text-center">{{$data->nama_barang}}</td>
                    <td class="text-center">{{$data->harga}}</td>
                    <td class="text-center">{{$data->stok}} Units</td>
                    <td class="text-center">{{$data->deskripsi}}</td>
                    <td class="text-center"><img src="{{$data->image()}}" alt="" style="width:100px; height:100px;" alt="cover"></td>

                    <td>
                        <form class="text-center" action="{{route('barang.destroy',$data->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{route('barang.edit',$data->id)}}" class="btn btn-warning fa fa-edit"></a>
                            <button type="submit" class="btn btn-danger fa fa-trash delete-confirm"></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('sweetalert::alert')
@endsection

