@extends('layouts.admin')
@section('title')
Edit Barang
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Edit Barang</div>
        <div class="card-body">
         <form action="{{url('admin/barang/update')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="nama" id="formGroupExampleInput" 
            placeholder="Nama" value="{{$barang->nama}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Berat</label>
            <input type="text" class="form-control" name="berat" id="formGroupExampleInput" 
            placeholder="Berat" value="{{$barang->berat}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$barang->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection