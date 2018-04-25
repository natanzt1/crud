<?php

namespace App\Http\Controllers;

use App\Warung;
use Illuminate\Http\Request;

class WarungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $warungs = Warung::all();
        return view('warung/index', compact('warungs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('warung/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
            'nama_barang'=> 'required',
            'harga'=> 'required | numeric'          
        ]);
        $barang = new warung();
        $barang->nama_barang = $request->get('nama_barang');
        $barang->harga = $request->get('harga');
        $barang->save();
        return redirect('/warung');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Warung  $warung
     * @return \Illuminate\Http\Response
     */
    public function show(Warung $warung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Warung  $warung
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = warung::find($id);
        return view('/warung/edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Warung  $warung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barang = warung::find($id);
                $this->validate(request(),[
            'nama_barang'=> 'required',
            'harga'=> 'required | numeric'          
        ]);
        $barang->nama_barang = $request->get('nama_barang');
        $barang->harga = $request->get('harga');
        $barang->save();
        return redirect('/warung');
        return "$id";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Warung  $warung
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = warung::find($id);
        $barang->delete();
        return redirect('/warung');
    }
}
