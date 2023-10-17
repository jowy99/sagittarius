<?php
declare(strict_types=1);

namespace App\Http\Controllers\website\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\projects;

class ShowProjectsController extends Controller
{
    public function __invoke()
    {
        $projs = projects::query()
            ->paginate(6);

        return view('website.projects', with([
            'projs' => $projs,
        ]));
    }
}
