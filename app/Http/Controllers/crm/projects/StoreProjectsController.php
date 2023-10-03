<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\crm\projects\StoreProjectsRequest;
use App\Models\projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class StoreProjectsController extends Controller
{
    public function __invoke(StoreProjectsRequest $request): RedirectResponse
    {
        $data = $request->validated();
        projects::query()->create($data);

        return Redirect::route('crm.add-proj');
    }
}
