<?php
declare(strict_types=1);

namespace App\Http\Controllers\website\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ShowFileController extends Controller
{
    public function __invoke($file)
    {
        $path = storage_path('app/public/projectsDocs'.'/'.$file);

        return response()->file($path);
    }
}
