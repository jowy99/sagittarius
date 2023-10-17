<?php
declare(strict_types=1);

namespace App\Http\Controllers\website\dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\devs;

class ShowDevProjectsController extends Controller
{
    public function __invoke()
    {
        $devs = devs::query()
            ->paginate(6);

        return view('website.dev-projects', with([
            'devs' => $devs,
        ]));
    }
}
