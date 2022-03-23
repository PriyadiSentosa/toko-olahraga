@extends('layouts.admin')

@section('header')
<div class="row">
    <ol class="breadcrumb">
        <li><a href="#">
                <em class="fa fa-home"></em>
            </a></li>
        <li class="active"><b><i>Supplier</i></b></li>
    </ol>
</div>
<!--/.row-->


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><b><i>Supplier</i></b></h1>
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
        $('#suplier').DataTable();
    });

</script>
<script src="{{asset('js/sweetalert2.js')}}"></script>
<script src="{{asset('js/delete.js')}}"></script>
@endsection

@section('content')
<div class="panel panel-default col-md-12">
    <div class="panel-heading">Supplier
        <a href="{{ route('suplier.create') }}" class="btn btn-primary" style="float: right;">
            <span class="fa fa-plus">&nbsp;</span> tambah</a>
    </div>
    <div class="panel-body">
        <table id="suplier" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php $no=1 @endphp
                @foreach ($suplier as $data)
                <tr>
                    <td class="text-center">{{$no++}}</td>
                    <td class="text-center">{{$data->nama}}</td>
                    <td class="text-center">{{$data->alamat}}</td>
                    <td>
                        <form class="text-center" action="{{route('suplier.destroy',$data->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <a href="{{route('suplier.edit',$data->id)}}" class="btn btn-warning fa fa-edit"></a>
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
