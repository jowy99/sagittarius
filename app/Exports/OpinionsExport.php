<?php

namespace App\Exports;

use App\Models\opinions;
use Maatwebsite\Excel\Concerns\FromCollection;

class OpinionsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return opinions::all();
    }
}
