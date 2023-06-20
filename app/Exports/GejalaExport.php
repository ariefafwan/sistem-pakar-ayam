<?php

namespace App\Exports;

use App\Models\Gejala;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class GejalaExport implements FromView
{
    public function view(): View
    {
        return view('admin.export.gejala', [
            'gejala' => Gejala::all()
        ]);
    }
}
