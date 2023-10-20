<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\aboutme;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class ShowEditAboutmeController extends Controller
{
    public function __invoke() : View
    {
        return view('crm.aboutme.edit-aboutme');
    }
}
