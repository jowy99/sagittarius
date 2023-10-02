<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ShowAddDevProjectsController extends Controller
{
    public function __invoke(): View
    {
        return view('crm.add-dev');
    }
}
