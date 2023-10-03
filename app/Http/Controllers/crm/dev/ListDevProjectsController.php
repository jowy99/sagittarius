<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\devs;
use Illuminate\Contracts\View\View;


class ListDevProjectsController extends Controller
{
    public function __invoke(Request $request) : View
    {
        $devs = devs::query()
            ->paginate(6);

        return view('crm.dev.list-dev')
            ->with([
                'devs' => $devs,
            ]);

    }
}
