<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use App\Models\devs;
use Illuminate\Http\Request;
use App\Http\Requests\crm\dev\StoreDevProjectsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\File;

class StoreDevProjectsController extends Controller
{
    public function __invoke(StoreDevProjectsRequest $request): RedirectResponse
    {

        $data = $request->validated();

        $media = $request->file('image');

        $data = devs::query()->create($data);

        $data->addMedia($media)->toMediaCollection('gallery');


        return Redirect::route('crm.add-dev');
    }
}
