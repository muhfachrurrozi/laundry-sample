<?php

namespace App\Http\Controllers;

use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tokos = Toko::latest()->paginate(10);

        return view('admin.tokos.index', compact('tokos'))
        ->with('i', (request()->input('page', 1) -1) *10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tokos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Ntoko = new Toko;

        // Upload
        $logo = $request->logo_toko;
        $fileName = time() . '.' . $logo->getClientOriginalExtension();
        $request->logo_toko->move(public_path('logo-toko/'),$fileName);
        $Ntoko->logo_toko = $fileName;
        // end upload

        $Ntoko->name_toko = $request->get('name_toko');
        $Ntoko->telepon_toko = $request->get('telepon_toko');
        $Ntoko->alamat_toko = $request->get('alamat_toko');

        $Ntoko->save();

        return redirect()->route('tokos.index')->with('input', 'Toko berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Toko $toko)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $toko = Toko::findOrfail($id);

        return view('admin.tokos.edit', compact('toko'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'logo_toko' => 'required|img',
            'name_toko' => 'required',
            'telepon_toko' => 'required',
            'alamat_toko' => 'required',
        ]);
        $toko = Toko::findOrfail($id);

        // edit Upload
        if ($request->hasFile('logo_toko')) {
            $toko->delete('logo-toko/'.$toko->logo_toko);
            $logo = $request->file('logo_toko');
            $fileName = time() . '.' . $logo->getClientOriginalExtension();
            $request->logo_toko->move(public_path('logo-toko/'), $fileName);
            $toko->logo_toko = $fileName;
        }
        // end edit upload

        $toko->name_toko = $request->get('name_toko');
        $toko->telepon_toko = $request->get('telepon_toko');
        $toko->alamat_toko = $request->get('alamat_toko');

        $toko->update();

        return redirect()->route('tokos.index')->with(['edit', 'Toko berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dtoko = Toko::findOrfail($id);

        Storage::delete($dtoko->logo_toko);

        $dtoko->delete();

        return redirect()->route('tokos.index')->with('delete', 'Toko berhasil');
    }
}