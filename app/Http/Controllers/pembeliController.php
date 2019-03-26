<?php

namespace App\Http\Controllers;
use App\pembeli;

use Illuminate\Http\Request;

class pembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //r
        $pembeli = pembeli::paginate(10);
        return view('pembeli', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pembeli = pembeli::paginate(10);
        return view('pembeli', compact('pembeli'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new pembeli();
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->nama_barang = $request->nama_barang;
        $pembeli->jumlah_beli = $request->jumlah_beli;
        $pembeli->harga_barang = $request->harga;
        $pembeli = pembeli::create(array_merge($request->all(), ['total_harga' => $request->jumlah_beli * $request->harga_barang]));
        $pembeli->save();
        return redirect('/pembeli/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::find($id);
        $pembeli->delete();
        return redirect('/pembeli/create');
    }
}
