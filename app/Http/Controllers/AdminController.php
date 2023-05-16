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


    public function editgejala($id)
    {
        $page = "Edit Gejala";
        $gelaja = Gejala::findOfFail($id);
        return view('admin.gejala.edit', compact('page', 'gejala'));
    }

    public function updategejala(Request $request, $id)
    {
        $dtUpload = Gejala::findOrFail($id);
        $dtUpload->name = $request->name;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Gejala Talah Berhasil diedit');
        return redirect()->route('gejala.index');
    }

    public function destroygejala($id)
    {
        $gejala = Gejala::findOrFail($id);
        $gejala->delete();

        Alert::success('Informasi Pesan!', 'Gejala Talah Berhasil dihapus');
        return redirect()->route('gejala.index');
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

    public function editpenyakit($id)
    {
        $page = "Edit Penyakit";
        $penyakit = Penyakit::findOrFail($id);
        return view('admin.penyakit.edit', compact('page', 'penyakit'));
    }

    public function updatepenyakit(Request $request, $id)
    {
        $dtUpload = Penyakit::findOrFail($id);
        $dtUpload->det_penyakit = $request->det_penyakit;
        $dtUpload->solusi_penyakit = $request->solusi_penyakit;
        $dtUpload->gambar = $request->gambar;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Penyakit Telah Berhasil diedit');
        return redirect()->route('penyakit.index');
    }

    public function destroypenyakit($id)
    {
        $penyakit = Penyakit::findOfFail($id);
        $penyakit->delete();

        Alert::success('Informasi Pesan!', 'Penyakit Telah Berhasil dihapus');
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

    public function editbasis($id)
    {
        $page = "Edit Basis Pengetahuan";
        $basis = BasisPengetahuan::findOrFail($id);
        return view('admin.basispengetahuan.edit', compact('page', 'basis'));
    }

    public function updatebasis(Request $request, $id)
    {
        $dtUpload = BasisPengetahuan::findOrFail($id);
        $dtUpload->penyakit_id = $request->penyakit_id;
        $dtUpload->gejala_id = $request->gejala_id;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Basis Pengetahuan Telah Berhasil diedit');
        return redirect()->route('basis.index');
    }

    public function destroybasis($id)
    {
        $basis = BasisPengetahuan::findOrFail($id);
        $basis->delete();

        Alert::success('Informasi Pesan!', 'Basis Pengetahuan Telah Berhasil dihapus');
        return redirect()->route('basis.index');
    }
}
