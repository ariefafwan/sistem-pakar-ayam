<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Hasil;
use App\Models\Penyakit;
use App\Models\Rule;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function welcome()
    {
        $gejala = Gejala::all();
        $page = "Selamat Datang";
        $penyakit = Penyakit::latest()->paginate(10);
        return view('welcome', compact('gejala', 'penyakit', 'page'));
    }
    public function diagnosauser(Request $request)
    {
        $cek = implode('AND', $request->cek);
        // dd($cek);
        $rule = Rule::where('rule', 'like', "%" . $cek . "%")->get();

        if ($rule->isEmpty()) {
            $page = "Hasil Tidak Ditemukan";
            return view('hasilgagal', compact('page'));
        }

        $hasil = session("hasil");
        if ($hasil != null) {
            unset($hasil);
        }

        foreach ($rule as $r) {
            $penyakit = Penyakit::findOrFail($r->penyakit_id);
            $hasil[] = [
                "penyakit_id" => $penyakit->id,
                "kd_penyakit" => $penyakit->kd_penyakit,
                "nama_penyakit" => $penyakit->nama_penyakit,
                "det_penyakit" => $penyakit->det_penyakit,
                "solusi_penyakit" => $penyakit->solusi_penyakit,
                "gambar" => $penyakit->gambar,
            ]; // Tambahkan hasil ke array hasil

            $dataupload = new Hasil();
            $dataupload->penyakit_id = $penyakit->id;
            $dataupload->save();
        }

        session(["hasil" => $hasil]);
        return redirect()->route('hasil.user');
    }

    public function hasiluser()
    {
        $hasil = session("hasil");
        $page = "Hasil Diagnosa";
        return view('hasil', compact('page'))->with('hasil', $hasil);
        // dd($hasil);
    }

    public function riwayat()
    {
        $hasil = Hasil::latest()->get();
        $page = "Riwayat Diagnosa";
        return view('riwayat', compact('hasil', 'page'));
    }
}
