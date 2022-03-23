@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0"><b><i>Edit Data Barang</i></b></h1>
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
                    <form action="{{route('barang.update',$barang->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for=""> Nama Supplier</label>
                            <select name="suplier_id" class="form-control @error('title') is-invalid @enderror">
                                @foreach ($suplier as $data)
                                <option value="{{$data->id}}" {{$data->id == $barang->suplier_id ? 'selected="selected"' : '' }}>{{$data->nama}}></option>
                                @endforeach
                            </select>
                            @error('suplier_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nama Barang</label>
                            <input type="text" name="nama_barang" value="{{$barang->nama_barang}}" class="form-control @error('nama_barang') is-invalid @enderror">
                            @error('nama_barang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Harga Barang</label>
                            <input type="number" name="harga" value="{{$barang->harga}}" class="form-control @error('harga') is-invalid @enderror">
                            @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                          <div class="form-group">
                              <label for="">Masukan Stok Barang</label>
                              <input type="text" name="stok" value="{{$barang->stok}}" class="form-control @error('stok') is-invalid @enderror">
                              @error('stok')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
                            <div class="form-group">
                              <label for="">Masukan Deskripsi Barang</label>
                              <input type="text" name="deskripsi" value="{{$barang->deskripsi}}" class="form-control @error('deskripsi') is-invalid @enderror">
                              @error('deskripsi')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>

                        <div class="form-group">
                            <label for="">Masukan Gambar Barang</label>
                            <br>
                            <img src="{{ $barang->image() }}" height="75" style="padding:10px;" />
                            <input type="file" name="cover" class="form-control">
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
