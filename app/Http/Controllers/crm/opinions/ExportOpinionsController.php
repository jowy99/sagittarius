<?php

namespace App\Http\Controllers\crm\opinions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\opinions;
use App\Exports\OpinionsExport;
use Maatwebsite\Excel\Facades\Excel;

class ExportOpinionsController extends Controller
{
    public function __invoke()
    {
        return Excel::download(new OpinionsExport, 'Opinions.xlsx');
    }
}
