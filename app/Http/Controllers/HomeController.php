<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Proses;
use App\Models\Status;
use App\Models\Jasa;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function memberHome()
    {
        return view('member.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function kasirHome()
    {
        return view('kasir.index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $count1 = Proses::count('status_id', ['3']);
        $count2 = Proses::count('status_id', ['2']);
        $count3 = Proses::sum('status_id', ['1']);
        $status = ['1'];
        $proses = Proses::whereIn('status_id', $status)->get();

        return view('admin.index', ['proses' => $proses, 'count1' => $count1, 'count2' => $count2, 'count3' => $count3])
        ->with('i',(request()->input('page',1)-1)*10);
    }
}