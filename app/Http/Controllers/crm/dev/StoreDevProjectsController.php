<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use App\Models\devs;
use Illuminate\Http\Request;
use App\Http\Requests\crm\dev\StoreDevProjectsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class StoreDevProjectsController extends Controller
{
    public function __invoke(StoreDevProjectsRequest $request): RedirectResponse
    {
        $data = $request->validated();
        devs::query()->create($data);

        return Redirect::route('crm.add-dev');
    }
}
