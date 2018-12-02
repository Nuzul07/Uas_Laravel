@extends('layouts.admin')
@section('title')
Add Gudang
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Tambah Gudang</div>
        <div class="card-body">
         <form action="{{url('admin/gudang/save')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="formGroupExampleInput" 
            placeholder="Alamat" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kapasitas</label>
            <input type="text" class="form-control" name="kapasitas" id="formGroupExampleInput" 
            placeholder="Kapasitas" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Pic</label>
            <input type="text" class="form-control" name="pic" id="formGroupExampleInput" 
            placeholder="Pic" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection