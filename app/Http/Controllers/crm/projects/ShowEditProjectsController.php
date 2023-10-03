<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\projects;
use Illuminate\Contracts\View\View;

class ShowEditProjectsController extends Controller
{
    public function __invoke(Request $request, int $id): View
    {
        $projs = projects::query()->findOrFail($id);

        return view('crm.projects.edit-proj')->with([
            'projs' => $projs,
        ]);
    }
}
