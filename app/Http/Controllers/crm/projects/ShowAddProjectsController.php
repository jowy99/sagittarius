<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class ShowAddProjectsController extends Controller
{
    public function __invoke(): View
    {
        return view('crm.projects.add-project');
    }
}
