<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;
use App\Models\BasisPengetahuan;
use App\Models\Hasil;
use App\Models\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    //gejala
    public function gejala()
    {
        $user = Auth::user()->id;
        $page = "Daftar Gejala";
        $gejala = Gejala::latest()->paginate(10);
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
        $dtUpload->kd_gejala = $request->kd_gejala;
        $dtUpload->nama_gejala = $request->nama_gejala;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Gejala Baru Berhasil ditambahkan');
        return redirect()->route('gejala.index');
    }

    public function editgejala($id)
    {
        $page = "Edit Gejala";
        $gejala = Gejala::findOrFail($id);
        return view('admin.gejala.edit', compact('page', 'gejala'));
    }

    public function updategejala(Request $request, $id)
    {
        $dtUpload = Gejala::findOrFail($id);
        $dtUpload->kd_gejala = $request->kd_gejala;
        $dtUpload->nama_gejala = $request->nama_gejala;
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
        $penyakit = Penyakit::latest()->paginate(10);
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
        $dtUpload->kd_penyakit = $request->kd_penyakit;
        $dtUpload->nama_penyakit = $request->nama_penyakit;
        $dtUpload->det_penyakit = $request->det_penyakit;
        $dtUpload->solusi_penyakit = $request->solusi_penyakit;
        $file = $request->file('gambar');
        if ($request->validate([
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048'
        ])) {
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/penyakit/', $filename);
            $dtUpload->gambar = $filename;
        }
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Penyakit Baru Berhasil ditambahkan');
        return redirect()->route('penyakit.index');
    }

    public function showpenyakit($id)
    {
        $page = "Detail Penyakit";
        $penyakit = Penyakit::findOrFail($id);
        $basis = BasisPengetahuan::where('penyakit_id', $penyakit->id)->get();
        $gejala = Gejala::all();
        return view('admin.penyakit.show', compact('page', 'penyakit', 'basis', 'gejala'));
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
        $dtUpload->kd_penyakit = $request->kd_penyakit;
        $dtUpload->nama_penyakit = $request->nama_penyakit;
        $dtUpload->det_penyakit = $request->det_penyakit;
        $dtUpload->solusi_penyakit = $request->solusi_penyakit;
        $file = $request->file('gambar');
        if ($request->validate([
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048'
        ])) {
            // menghapus gambar lama
            if ($request->oldImage) {
                Storage::delete('public/penyakit/' . $dtUpload->gambar);
            }
            // menyimpan gambar baru
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/penyakit/', $filename);
            $dtUpload->gambar = $filename;
        }
        // $dtUpload->gambar = $request->gambar;
        $dtUpload->save();

        Alert::success('Informasi Pesan!', 'Penyakit Telah Berhasil diedit');
        return redirect()->route('penyakit.index');
    }

    public function destroypenyakit($id)
    {
        $penyakit = Penyakit::findOrFail($id);
        Storage::delete('public/penyakit/' . $penyakit->gambar);
        $penyakit->delete();

        Alert::success('Informasi Pesan!', 'Penyakit Telah Berhasil dihapus');
        return redirect()->route('penyakit.index');
    }

    //basispengetahuan
    public function basispengetahuan()
    {
        $user = Auth::user()->id;
        $page = "Daftar Basis Pengetahuan";
        $penyakit = BasisPengetahuan::select('penyakit_id')->distinct()->get();
        $basis = BasisPengetahuan::all();
        return view('admin.basispengetahuan.index', compact('user', 'page', 'basis', 'penyakit'));
    }

    public function createbasis()
    {
        $user = Auth::user()->id;
        $penyakits = Penyakit::all();
        $gejalas = Gejala::all();
        $page = "Tambah Basis Pengetahuan";
        return view('admin.basispengetahuan.create', compact('user', 'page', 'penyakits', 'gejalas'));
    }

    public function storebasis(Request $request)
    {
        $gejala = $request->gejala_id;
        $jumlah_dipilih = count($gejala);
        $rule = implode('AND', $request->gejala_id);

        for ($i = 0; $i < $jumlah_dipilih; $i++) {
            $dtUpload = new BasisPengetahuan();
            $dtUpload->penyakit_id = $request->penyakit_id;
            $dtUpload->gejala_id = $request->gejala_id[$i];
            $dtUpload->save();
        }

        $data = new Rule();
        $data->penyakit_id = $request->penyakit_id;
        $data->rule = $rule;
        $data->save();

        Alert::success('Informasi Pesan!', 'Basis Pengetahuan Baru Berhasil ditambahkan');
        return redirect()->route('basis.index');
    }

    public function destroybasis($penyakit_id)
    {
        $basis = BasisPengetahuan::where('penyakit_id', $penyakit_id);
        $rule = Rule::where('penyakit_id', $penyakit_id);
        $basis->delete();
        $rule->delete();

        Alert::success('Informasi Pesan!', 'Basis Pengetahuan Telah Berhasil dihapus');
        return redirect()->route('basis.index');
    }

    public function diagnosa()
    {
        $hasil = Hasil::latest()->paginate(10);
        $page = 'Hasil Diagnosa';
        return view('admin.diagnosa.index', compact('page', 'hasil'));
    }

    public function creatediagnosa()
    {
        $page = "Tambah Diagnosa";
        $gejala = Gejala::all();
        $cekgejala = session("cek");
        return view('admin.diagnosa.create', compact('page', 'gejala', 'cekgejala'));
    }

    public function adddiagnosa(Request $request)
    {
        $cek = implode('AND', $request->cek);
        $page = "Hasil Diagnosa";
        $rule = Rule::where('rule', 'like', "%" . $cek . "%")->get();
        return view('admin.diagnosa.hasil', compact('rule', 'page'));
    }

    // public function test(Request $request)
    // {
    //     $hasil = Hasil::select('user_id', 'aspek_id', 'jenis')
    //         ->selectRaw("SUM(n_bobot) / count(n_bobot) as nilai")
    //         ->groupBy('user_id')
    //         ->groupBy('aspek_id')
    //         ->groupBy('jenis')
    //         ->orderBy('user_id', 'asc')
    //         ->orderBy('aspek_id', 'asc')
    //         ->get();
    //     $basis = BasisPengetahuan::select('penyakit_id')
    //         ->SelectRaw("GROUP_CONCAT(gejala_id SEPARATOR '-') as `gejala`")
    //         ->groupBy('penyakit_id')
    //         ->where('penyakit_id', '2')
    //         ->pluck('gejala');
    //     foreach ($basis as $p) {
    //         $a = explode("-", $p);
    //         $sql1 = Gejala::where('id', $a)->get();
    //     }
    //     dd($sql1);

    //     $input = "3AND4AND5";
    //     $rule = Rule::all()->where('rule', 'like', "%" . $input . "%");

    //     foreach ($rule as $ru) {
    //         $haha = $ru->penyakit_id;
    //         dd($haha);
    //     }
    // }
}
