<?php

namespace App\Exports;

use App\Models\Hasil;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HasilExport implements FromView
{
    public function view(): View
    {
        return view('admin.export.hasil', [
            'hasil' => Hasil::all()
        ]);
    }
}
