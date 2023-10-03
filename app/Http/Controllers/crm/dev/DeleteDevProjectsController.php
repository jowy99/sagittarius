<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\devs;


class DeleteDevProjectsController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $devs = devs::query()->findOrFail($id);
        $devs->delete();

        return redirect()->back();
    }
}
