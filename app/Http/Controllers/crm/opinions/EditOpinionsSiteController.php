<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\opinions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class EditOpinionsSiteController extends Controller
{
    public function __invoke(): View
    {
        return view('crm.opinions.edit-opinions');
    }
}
