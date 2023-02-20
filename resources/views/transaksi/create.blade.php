@extends('template.master')

@section('judul')
<h1>Halaman Data Transaksi </h1>
@endsection

@section('content')
<div class="row">
  <!-- left column -->
  <div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Data Member</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
        <div class="card-body">
          <div class="form-group">
          <label>data member</label>
            <select class="form-control" aria-label="Default select example" name="id_member" id="id_member" >
            <option selected>Open this select menu</option>
            @forelse ($member as $member)
            <option value="{{ $member->id}}">{{ $member->nama }}</option>
            @empty
            <option value=""disabled>Tidak Ada Member</option>
            @endforelse
            </select>
           </div>
        </div>
    </div>
    <!-- /.card -->

  </div>
  <!--/.col (left) -->
  <!-- right column -->
  <div class="col-md-6">
    <!-- Form Element sizes -->
      <div class="card card-success">
      <div class="card-header">
        <h3 class="card-title">Pilih Paket</h3>
      </div>
      <div class="card-body">
      <label for="exampleInputEmail1">Data Paket</label>
      <select class="form-control" name="nama_paket" id="nama_paket"> 
        <option selected>Open this select menu</option>
        @forelse ($paket as $paket)
        <option value="{{ $paket->id}}">{{ $paket->nama_paket }}</option>
        @empty
       <option value="" disabled> Tidak Ada Member</option>
        @endforelse
     </select>
    </div>
    <div class="card-body">
      <label for="qty"> Jumlah </label>
      <input type="number" class="form-control" name="qty" id="qty">
    </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!--/.col (right) -->
</div>
@endsection