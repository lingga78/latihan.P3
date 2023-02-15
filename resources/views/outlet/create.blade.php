@extends('template.master')

@section('judul')
<h1>Create Outlet</h1>
@endsection

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Menambahkan Outlet</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Enter Nama">
                  </div>
                  <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Enter Alamat">
                    </div>
                    <div class="form-group">
                    <label for="inputTlp">Tlp</label>
                    <input type="text" name="tlp" class="form-control" id="inputTlp" placeholder="EnterTlp">
                    </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection