<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Models\Member;
use App\Models\Paket;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Transaksi $transaksi, Request $request)
    {
        //
        $transaksi = new Transaksi;
        $transaksi->outlet_id           = Auth::user()->outlet_id;
        $transaksi->kode_invoice        = '';
        $transaksi->member_id           = $request->member_id;
        $transaksi->tgl                 = Carbon::now()->format('Y-m-d');
        $transaksi->batas_waktu         = Carbon::now()->format('Y-m-d');
        $transaksi->tgl_bayar           = Carbon::now()->format('Y-m-d');
        $transaksi->biaya_tambahan      = 0;
        $transaksi->diskon              = 0;
        $transaksi->pajak               = 0;
        $transaksi->status              = 'baru';
        $transaksi->dibayar             = 'belum_dibayar';
        $transaksi->user_id             = Auth::user()->id;
        $transaksi->save();
        $idTransaksi = $transaksi->id;
        return redirect()->route('transaksi.proses', $transaksi->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
       $pakets = Paket::all()->where('outlet_id', $transaksi->outlet_id);
       return view('transaksi.proses', compact ('pakets'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
      
    }
}
