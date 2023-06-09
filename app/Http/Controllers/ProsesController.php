<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Proses;
use App\Models\Status;
use App\Models\Jasa;
use App\Models\User;
use App\Models\Bayar;

class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = ['1'];
        $proses = Proses::whereIn('status_id', $status)->get();

        return view('admin\proses\index', ['proses' => $proses])
        ->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $member = ['member'];
        $status = Status::all();
        $jasas = Jasa::all();
        $users = User::whereIn('hak', $member)->get();
        $tproses = Proses::all();

        $latestRecord = Proses::with('status')->latest()->first();
        $nomor = 1;

        if($latestRecord){
            $lastNumber = substr($latestRecord->nota, -6);
            $nomor = intval($lastNumber) + 1;
        }

        $autoNumber = str_pad($nomor, 6, '0', STR_PAD_LEFT);

        return view('admin.proses.create', compact('tproses','status','jasas','users','autoNumber'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nproses = new Proses;

        $nilai1 = $request->input('items');
        $nilai2 = $request->input('serviss');
        $nilai3 = $request->input('pakets');
        $nilai4 = $request->input('kategoris');


        $jasa_id = Jasa::where('item', $nilai1)
        ->where('servis', $nilai2)->where('paket', $nilai3)
        ->where('kategori', $nilai4)->value('id');

        $nproses->jasa_id = $jasa_id;
        $nproses->status_id = $request->status_id;
        $nproses->user_id = $request->user_id;
        $nproses->nota = $request->nota;
        $nproses->jumlah = $request->jumlah;

        $nproses->save();

        return redirect()->route('proses.index')->with('input','Transaksi berhasil di input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Proses $proses, $id)
    {
        $proses = Proses::findOrfail($id);

        // if($proses->user_i

        return view('admin\proses\edit', compact('proses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $proses = Proses::findOrfail($id);

        $proses->total = $request->total;
        $proses->status_id = $request->status_id;

        $proses->update();

        return redirect()->route('proses.index')->with('update', 'Transaksi berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Proses $proses)
    {
        //
    }
}