<?php

namespace App\Exports;

use App\Models\Involucrado;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class InvolucradoExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('exportInvolucrados', [
            'involucrados' => Involucrado::all()
        ]);

        // return Involucrado::all();
        //return Involucrado::select("descripcionInvolucrado")->get();
    }
}
