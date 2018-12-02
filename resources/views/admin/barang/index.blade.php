@extends('layouts.admin')
@section('title')
Barang Dashboard
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header" style="background-color: #e3f2fd;">Daftar Barang</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Berat</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $barang = \App\Barang::all();
              ?>
              @foreach($barang as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->nama}}</td>
              <td>{{$q->berat}}</td>
              <td>
                <a href="{{url('admin/barang/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="{{url('admin/barang/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
        <li class="list-group-item float-right">
          <a href="{{url('admin/barang/add')}}" class="btn btn-outline-success btn-sm">Tambah Data</a>
        </li>
      </div>
    </div>
  </div>
</div>
</div>
@endsection