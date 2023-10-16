<?php

namespace App\Exports;

use App\Models\LibroRevista;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LibrosRevistaExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exportLibroRevistas', [
            'libroRevistas' => LibroRevista::all()
        ]);
    }
}
