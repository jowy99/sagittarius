<?php

namespace App\Http\Controllers\crm\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\projects;
use Illuminate\Contracts\View\View;
class ListProjectsController extends Controller
{
    public function __invoke(Request $request) : View
    {
        $projs = projects::query()
            ->paginate(6);

        return view('crm.projects.list-projects')
            ->with([
                'projs' => $projs,
            ]);

    }
}
