<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Rule;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function welcome()
    {
        $gejala = Gejala::all();
        $penyakit = Penyakit::latest()->paginate(10);
        return view('welcome', compact('gejala', 'penyakit'));
    }
    public function diagnosauser(Request $request)
    {
        $cek = implode('AND', $request->cek);
        $rule = Rule::where('rule', 'like', "%" . $cek . "%")->get();

        if ($rule->isEmpty()) {
            return view('hasilgagal');
        }

        $hasil = session("hasil");
        if ($hasil != null) {
            unset($hasil);
        }

        foreach ($rule as $r) {
            $penyakit = Penyakit::findOrFail($r->penyakit_id);
            $hasil = [
                "penyakit_id" => $penyakit->id,
                "kd_penyakit" => $penyakit->kd_penyakit,
                "nama_penyakit" => $penyakit->nama_penyakit,
                "det_penyakit" => $penyakit->det_penyakit,
                "solusi_penyakit" => $penyakit->solusi_penyakit,
                "gambar" => $penyakit->gambar,
            ];
        }

        session(["hasil" => $hasil]);
        return redirect()->route('hasil.user');
    }

    public function hasiluser()
    {
        $hasil = session("hasil");
        // return view('hasil')->with('hasil', $hasil);
        dd($hasil);
    }
}
