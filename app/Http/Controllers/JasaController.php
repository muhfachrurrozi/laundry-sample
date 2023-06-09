<?php

namespace App\Http\Controllers;

use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jasas = Jasa::latest()->paginate(10);

        return view('admin.jasas.index', compact('jasas'))
        ->with('i', (request()->input('page', 1) -1) *10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jasas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $njasa = new Jasa;

        $njasa->item = $request->get('item');
        $njasa->servis = $request->get('servis');
        $njasa->kategori = $request->get('kategori');
        $njasa->paket = $request->get('paket');
        $njasa->harga = $request->get('harga');

        $njasa->save();

        return redirect()->route('jasas.index')->with('input', 'Harga cuci berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jasa $jasa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $jasa = Jasa::findOrFail($id);

        return view('admin.jasas.edit', compact('jasa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $njasa = jasa::findOrFail($id);

        $njasa->item = $request->get('item');
        $njasa->servis = $request->get('servis');
        $njasa->kategori = $request->get('kategori');
        $njasa->paket = $request->get('paket');
        $njasa->harga = $request->get('harga');

        $njasa->save();

        return redirect()->route('jasas.index')->with('update', 'Harga cuci berhasil di tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $djasa = Jasa::findOrFail($id);

        $djasa->delete();

        return redirect()->route('jasas.index')->with('delete', 'Harga cuci berhasil di hapus');
    }
}