<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use App\Models\devs;
use App\Http\Requests\crm\dev\StoreDevProjectsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class StoreDevProjectsController extends Controller
{
    public function __invoke(StoreDevProjectsRequest $request): RedirectResponse
    {
        $data = $request->validated();

//        dd($data);

        $devs = devs::query()->create($data);

        $devs->addMediaFromRequest('image')
            ->withResponsiveImages()
            ->usingName($devs->title)
            ->toMediaCollection('devProjects');

        return Redirect::route('crm.add-dev');
    }
}
