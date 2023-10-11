<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\devs;
use App\Models\Media;
use Illuminate\Contracts\View\View;

class ShowEditDevProjectsController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $devs = devs::query()->findOrFail($id);

        return view('crm.dev.edit-dev')->with([
            'devs' => $devs,
        ]);
    }
}
