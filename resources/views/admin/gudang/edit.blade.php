@extends('layouts.admin')
@section('title')
Edit Gudang
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Edit Gudang</div>
        <div class="card-body">
         <form action="{{url('admin/gudang/update')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="formGroupExampleInput" 
            placeholder="Alamat" value="{{$gudang->alamat}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Kapasitas</label>
            <input type="text" class="form-control" name="kapasitas" id="formGroupExampleInput" 
            placeholder="Kapasitas" value="{{$gudang->kapasitas}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Pic</label>
            <input type="text" class="form-control" name="pic" id="formGroupExampleInput" 
            placeholder="Pic" value="{{$gudang->pic}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$gudang->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection