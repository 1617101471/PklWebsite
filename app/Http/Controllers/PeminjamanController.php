<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\barang;
use App\peminjaman;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peminjamans = peminjaman::all();
        // dd($peminjamans);
        return view('peminjaman.index', compact('peminjamans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangs = barang::all();
        $users = User::all();
        return view('peminjaman.create', compact('barangs','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'id_user' => 'required|max:255',
            'id_barang' => 'required|max:255',
            'jumlah'=>'required|max:255',
            'tgl_pengembalian' => 'required|max:255'
        ]);

        $peminjamans = new peminjaman;
        $peminjamans->id_user = $request->id_user;
        $peminjamans->id_barang = $request->id_barang;
        $peminjamans->jumlah = $request->jumlah;
        $peminjamans->tgl_pengembalian = $request->tgl_pengembalian;
        $barangs = barang::findOrFail($peminjamans->id_barang);
        $barangs->stok = $barangs->stok - $request->jumlah;
        $barangs-> save();
        $peminjamans->save();
        return redirect()->route('peminjaman.index');
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
        $peminjamans = peminjaman::findOrFail($id);
        $users = User::all();
        $selectusers = peminjaman::findOrFail($id)->id_user;
        $barangs = barang::all();
        $selectbarangs = peminjaman::findOrFail($id)->id_barang;
        return view('peminjaman.edit', compact('peminjamans','users','selectusers','barangs','selectbarangs'));
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
        $this->validate($request, [
            'id_user' => 'required|max:255',
            'id_barang' => 'required|max:255',
            // 'tgl_pinjam' => 'required|max:255',
            'tgl_pengembalian' => 'required|max:255'
        ]);

        $peminjamans = peminjaman::findOrFail($id);
        $peminjamans->id_user = $request->id_user;
        $peminjamans->id_barang = $request->id_barang;
        // $peminjamans->tgl_pinjam = $request->tgl_pinjam;
        $peminjamans->tgl_pengembalian = $request->tgl_pengembalian;
        $peminjamans->save();
        return redirect()->route('peminjaman.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjamans = peminjaman::findOrFail($id);
        $barangs = barang::findOrFail($peminjamans->id_barang);
        $barangs->stok = $peminjamans->jumlah + $barangs->stok;
        $peminjamans->delete();
        return redirect()->route('peminjaman.index');

    }
}
