@extends('template.master')

@section('judul')
<h1>Halaman Data Paket</h1>
@endsection

@section('content')
<div class="col-md-12">
  <div class="card card-primary">
     <div class="card-header">
       <h3 class="card-title">Masukan Data Barang</h3>
     </div>
     <!-- /.card-header -->
     <!-- form start -->
     <form action="/paket" method="POST">
         @csrf
       <div class="card-body">
         <div class="form-group" >
         <label>Id Outlet</label>
            <select class="form-control" aria-label="Default select example" name="outlet_id" >
            <option selected>Open this select menu</option>
            @foreach ($outlet as $item)
            <option value="{{ $item->id}}">{{ $item->id }}</option>
            @endforeach
            </select>
           </div>
          <div class="form-group">
          <label>Jenis</label>
          <select class="form-control" name="jenis" id="Jenis">
            <option selected>Open this select menu</option>
            <option value="kiloan">Kiloan</option>
            <option value="selimut">Selimut</option>
            <option value="bed_cover">Bed Cover</option>
            <option value="kaos">Kaos</option>
            <option value="lain">lainnya</option>
          </select>
          </div>
         <div class="form-group">
             <label for="inputnamapaket">Nama Paket</label>
             <input type="text" name="nama_paket" class="form-control" id="nama_paket" placeholder="Enter Nama Paket">
           </div>
           <div class="form-group">
             <label for="inputharga">Harga </label>
             <input type="integer" name="harga" class="form-control" id="harga" placeholder="Enter Harga">
           </div>
       <!-- /.card-body -->
       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button> 
       </div>
     </form>
 </div>
@endsection
