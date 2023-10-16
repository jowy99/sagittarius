<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use App\Models\devs;
use App\Http\Requests\crm\dev\StoreDevProjectsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class StoreDevProjectsController extends Controller
{
    public function __invoke(StoreDevProjectsRequest $request): RedirectResponse
    {
        $devs = devs::query()->create($request->validated());

        $devs->addMediaFromRequest('image')
            ->withResponsiveImages()
            ->usingName($devs->title)
            ->toMediaCollection('devProjects');

        return Redirect::route('crm.add-dev');
    }
}
