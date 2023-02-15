@extends('template.master')

@section('judul')
    <h1>Edit Data</h1>
@endsection

@section ('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/outlet/{{ $outlet->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputid">Nama</label>
                    <input type="integer" name="nama" class="form-control" id="inputnama" placeholder="Enter nama" value="{{ $outlet->nama }}" require>
                  </div>
                  <div class="form-group">
                    <label for="inputNamaKelas">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="inputAlamat" placeholder="Enter Alamat"  value="{{ $outlet->alamat }}" require>
                  <div class="form-group">
                    <label for="inputjurusan">Telepon</label>
                    <input type="text" name="tlp" class="form-control" id="inputtelepon" placeholder="Enter Telepon"  value="{{ $outlet->tlp }}" require>
                  </div>
                </select>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>

                </div>
              </form>
            </div>
@endsection