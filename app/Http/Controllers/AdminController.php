<?php

namespace App\Http\Controllers;

use App\Models\BasisPengetahuan;
use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class AdminController extends Controller
{
    //gejala
    public function gejala()
    {
        $user = Auth::user()->id;
        $page = "Daftar Gejala";
        $gejala = Gejala::all();
        return view('admin.gejala.index', compact('user', 'page', 'gejala'));
    }

    public function creategejala()
    {
        $user = Auth::user()->id;
        $page = "Tambah Gejala";
        return view('admin.gejala.create', compact('user', 'page'));
    }

    public function storegejala(Request $request)
    {
        $dtUpload = new Gejala();
        $dtUpload->nama_gejala = $request->nama_gejala;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Gejala Baru Berhasil ditambahkan');
        return redirect()->route('gejala.index');
    }

    public function editgejala(Gejala $gejala)
    {
        $user = Auth::user()->id;
        $page = "Tambah Gejala";
        $gejala = $gejala;
        return view('admin.gejala.create', compact('user', 'page', 'gejala'));
    }

    //penyakit
    public function penyakit()
    {
        $user = Auth::user()->id;
        $page = "Daftar Penyakit";
        $penyakit = Penyakit::all();
        return view('admin.penyakit.index', compact('user', 'page', 'penyakit'));
    }

    public function createpenyakit()
    {
        $user = Auth::user()->id;
        $page = "Tambah Penyakit";
        return view('admin.penyakit.create', compact('user', 'page'));
    }

    public function storepenyakit(Request $request)
    {
        $dtUpload = new Penyakit();
        $dtUpload->det_penyakit = $request->det_penyakit;
        $dtUpload->solusi_penyakit = $request->solusi_penyakit;
        $dtUpload->gambar = $request->gambar;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Penyakit Baru Berhasil ditambahkan');
        return redirect()->route('penyakit.index');
    }

    //basispengetahuan
    public function basispengetahuan()
    {
        $user = Auth::user()->id;
        $page = "Daftar Basis Pengetahuan";
        $basis = BasisPengetahuan::all();
        return view('admin.basispengetahuan.index', compact('user', 'page', 'basis'));
    }

    public function createbasis()
    {
        $user = Auth::user()->id;
        $page = "Tambah Basis Pengetahuan";
        return view('admin.basispengetahuan.create', compact('user', 'page'));
    }

    public function storebasis(Request $request)
    {
        $dtUpload = new BasisPengetahuan();
        $dtUpload->penyakit_id = $request->penyakit_id;
        $dtUpload->gejala_id = $request->gejala_id;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Basis Pengetahuan Baru Berhasil ditambahkan');
        return redirect()->route('basis.index');
    }
}
