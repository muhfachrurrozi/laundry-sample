<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Proses;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status2 = ['2'];
        $status3 = ['3'];
        $proses = Proses::whereIn('status_id', $status2)->get();
        $proses3 = Proses::whereIn('status_id', $status3)->get();

        return view('admin\details\index', compact('proses', 'proses3'))
        ->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $transaksi = Proses::findOrfail($id);

        return view('admin.details.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proses = Proses::findOrfail($id);

        return view('admin.details.edit', compact('proses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proses = Proses::findOrfail($id);

        $proses->status_id = $request->status_id;

        $proses->update();

        return redirect()->route('details.index')->with('update', 'Transaksi berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}