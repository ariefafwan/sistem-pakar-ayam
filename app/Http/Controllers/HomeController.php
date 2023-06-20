<?php

namespace App\Http\Controllers;

use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = Auth::user();
        $page = "Dasboard Admin";
        $dt1 = Gejala::get()->count();
        $dt2 = Penyakit::get()->count();
        $dt3 = BasisPengetahuan::SelectRaw('count(*) as total')
            ->groupBy('penyakit_id')
            ->get();
        return view('admin.dashboard', compact('user', 'page', 'dt1', 'dt2', 'dt3'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
