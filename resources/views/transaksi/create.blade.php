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
            <option value="{{ $item->id}}">{{ $item->nama }}</option>
            @endforeach
            </select>
           </div>
           <div class="form-group">
             <label for="inputkodeinvoice">Kode Invoice</label>
             <input type="text" name="kode_invoice" class="form-control" id="kode_invoice" placeholder="Enter Kode Invoice">
           </div>
         <div class="form-group" >
         <label>Id Member</label>
            <select class="form-control" aria-label="Default select example" name="member_id" >
            <option selected>Open this select menu</option>
            @foreach ($member as $item)
            <option value="{{ $item->id}}">{{ $item->nama }}</option>
            @endforeach
            </select>
           </div>
           <div class="form-group">
             <label for="inputtanggal">Tanggal</label>
             <input type="date" name="tgl" class="form-control" id="tgl" placeholder="Enter Tanggal">
           </div>
           <div class="form-group">
             <label for="inputbataswaktu">Batas Waktu</label>
             <input type="date" name="batas_waktu" class="form-control" id="batas_waktu" placeholder="Enter Batas Waktu">
           </div>
           <div class="form-group">
             <label for="inputtanggalbayar">Tanggal Bayar</label>
             <input type="date" name="tgl_biaya" class="form-control" id="tgl_bayar" placeholder="Enter Tanggal Bayar">
           </div>
           <div class="form-group">
             <label for="inputbiayatambahan">Biaya Tambahan</label>
             <input type="number" name="biaya_tambahan" class="form-control" id="biaya_tambahan" placeholder="Enter Biaya Tambahan">
           </div>
           <div class="form-group">
             <label for="inputdiskon">Diskon</label>
             <input type="number" name="diskon" class="form-control" id="diskon" placeholder="Enter Diskon">
           </div>
           <div class="form-group">
             <label for="inputpajak">Pajak</label>
             <input type="number" name="pajak" class="form-control" id="pajak" placeholder="Enter Pajak">
           </div>
          <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" id="status">
            <option selected>Open this select menu</option>
            <option value="baru">Baru</option>
            <option value="proses">Proses</option>
            <option value="selesai">Selesai</option>
            <option value="diambil">Diambil</option>
          </select>
          </div>
          <div class="form-group">
          <label>Dibayar</label>
          <select class="form-control" name="dibayar" id="dibayar">
            <option selected>Open this select menu</option>
            <option value="dibayar">Dibayar</option>
            <option value="belum_dibayar">Belum Dibayar</option>
            </select>
          </div>
          <div class="form-group" >
         <label>Id User</label>
            <select class="form-control" aria-label="Default select example" name="user_id" >
            <option selected>Open this select menu</option>
            @foreach ($user as $item)
            <option value="{{ $item->id}}">{{ $item->id }}</option>
            @endforeach
            </select>
           </div>
        
       <!-- /.card-body -->
       <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button> 
       </div>
     </form>
 </div>
@endsection
