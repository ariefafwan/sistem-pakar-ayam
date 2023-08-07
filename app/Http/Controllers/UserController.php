<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Hasil;
use App\Models\Penyakit;
use App\Models\Rule;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function welcome()
    {
        $gejala = Gejala::all();
        $page = "Selamat Datang";
        $penyakit = Penyakit::latest()->paginate(10);
        return view('welcome', compact('gejala', 'penyakit', 'page'));
    }
    public function index()
    {
        $page = "Mulai Diagnosa";
        $gejala = Gejala::all();
        return view('user.diagnosa.create', compact('page', 'gejala'));
    }

    public function diagnosauser(Request $request)
    {
        $cek = implode('AND', $request->cek);
        // dd($cek);
        $rule = Rule::where('rule', 'like', "%" . $cek . "%")->get();

        if ($rule->isEmpty()) {
            $page = "Hasil Tidak Ditemukan";
            return view('user.diagnosa.hasilgagal', compact('page'));
        }

        $hasil = session("hasil");
        if ($hasil != null) {
            unset($hasil);
        }

        foreach ($rule as $r) {
            $penyakit = Penyakit::findOrFail($r->penyakit_id);
            $hasil[] = [
                "user_id" => Auth::user()->id,
                "penyakit_id" => $penyakit->id,
                "kd_penyakit" => $penyakit->kd_penyakit,
                "nama_penyakit" => $penyakit->nama_penyakit,
                "det_penyakit" => $penyakit->det_penyakit,
                "solusi_penyakit" => $penyakit->solusi_penyakit,
                "gambar" => $penyakit->gambar,
            ]; // Tambahkan hasil ke array hasil

            $dataupload = new Hasil();
            $dataupload->user_id = Auth::user()->id;
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
        return view('user.diagnosa.hasil', compact('page'))->with('hasil', $hasil);
        // dd($hasil);
    }

    public function cetakpdf()
    {
        $hasil = session("hasil");
        $pdf = PDF::loadview('user.diagnosa.diagnosapdf', ['hasil' => $hasil]);
        return $pdf->download('laporan-diagnosa.pdf');
    }

    public function riwayat()
    {
        $hasil = Hasil::where('user_id', Auth::user()->id)->paginate(5);
        $page = "Riwayat Diagnosa";
        return view('user.diagnosa.riwayat', compact('hasil', 'page'));
    }
}
