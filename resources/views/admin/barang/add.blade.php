@extends('layouts.admin')
@section('title')
Add Barang
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Tambah Barang</div>
        <div class="card-body">
         <form action="{{url('admin/barang/save')}}" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Pilih Gudang</label>
          <select class="custom-select my-1 mr-sm2" name="gudang_id">
            <option disabled selected value="null">Choose</option>
            <?php
              $data = \App\Gudang::all();
            ?>
            @foreach($data as $key)
            <option value="{{$key->id}}">{{$key->alamat}}</option>
            @endforeach
          </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <input type="text" class="form-control" name="nama" id="formGroupExampleInput" 
            placeholder="Nama" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Berat</label>
            <input type="text" class="form-control" name="berat" id="formGroupExampleInput" 
            placeholder="Berat" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection