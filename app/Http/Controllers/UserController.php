<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Toko;
use App\Models\User;

// use App\Http\Controllers\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tokos = Toko::all();
        $users = User::with('toko')->latest()->get();

        return view('admin.users.index', compact('users','tokos'))
        ->with('i',(request()->input('page',1)-1)*10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $tokos = Toko::all();
        $latestRecord = User::with('toko')->latest()->first();
        $nomor = 1;

        if($latestRecord){
            $lastNumber = substr($latestRecord->idm, -6);
            $nomor = intval($lastNumber) + 1;
        }

        $autoNumber = str_pad($nomor, 6, '0', STR_PAD_LEFT);




        return view('admin\users\create', compact('users', 'tokos','autoNumber'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuser = new User;
        $nuser->toko_id = $request->toko_id;
        $nuser->idm = $request->idm;
        $nuser->name = $request->name;
        $nuser->email = $request->email;
        $nuser->telepon = $request->telepon;
        $nuser->alamat = $request->alamat;
        $nuser->poto = $request->poto;
        $nuser->hak = $request->hak;
        $nuser->password = Hash::make($request->get('password'));

        // upoload
        $img = $request->poto;
        $fileName = time().'.'.$img->getClientOriginalExtension();
        $request->poto->move(public_path('user-img/'),$fileName);
        $nuser->poto = $fileName;

        $nuser->save();

        return redirect()->route('users.index')->with('input','User berhasil di input');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $duser = User::findOrfail($id);

        $duser->deleteImage('user-img/'.$duser->poto);

        $duser->delete();

        return redirect()->route('users.index')->with('delete', 'User berhasil');
    }
}
