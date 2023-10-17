<?php
declare(strict_types=1);

namespace App\Http\Controllers\website\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class DownloadFileController extends Controller
{
    public function __invoke(Request $request, $file)
    {
        $path = storage_path('app/public/projectsDocs'.'/'.$file);

        return response()->download($path);
    }
}
