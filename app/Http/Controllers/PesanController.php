<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proses;
use App\Models\Jasa;
use Illuminate\Support\Facades\Auth;

class PesanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status1 = ['1','2',Auth::user()->id];
        $status2 = ['3',Auth::user()->id];
        $pesan = Proses::whereIn('status_id',$status1)->latest()->get();
        $pesan1 = Proses::whereIn('status_id',$status2)->latest()->get();

        return view('member.pesans.index', compact('pesan','pesan1'))->with('i', (request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Proses::with('status')->latest()->first();
        $auto = 1;
        if($data){
            $lastNumber = substr($data->nota, -6);
            $nomor = intval($lastNumber) + 1;
        }
        $autoNumber = str_pad($nomor, 6, '0', STR_PAD_LEFT);

        return view('member\pesans\create', compact('data','auto','autoNumber'));
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

        return redirect()->route('pesans.index')->with('input','Transaksi berhasil di input');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pesan $pesan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proses = Proses::findOrfail($id);

        return view('member\pesans\edit', compact('proses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $nproses = Proses::findOrfail($id);

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

        $nproses->Update();

        return redirect()->route('pesans.index')->with('input','Transaksi berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pesan = Proses::findOrfail($id);

        $pesan->delete();

        return redirect()->route('pesans.index')->with('delete', 'Berhasil berhasil');
    }
}