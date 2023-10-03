<?php

namespace App\Http\Controllers\crm\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\projects;

class DeleteProjetcsController extends Controller
{
    public function __invoke(Request $request, int $id)
    {
        $proj = projects::query()->findOrFail($id);
        $proj->delete();

        return redirect()->back();
    }
}
