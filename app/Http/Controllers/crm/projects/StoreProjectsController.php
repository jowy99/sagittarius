<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\crm\projects\StoreProjectsRequest;
use App\Models\projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class StoreProjectsController extends Controller
{
    public function __invoke(StoreProjectsRequest $request): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('file'))
        {
            $file = $request->file->storeAs('', $data['file']->getClientOriginalName(), 'docs');
            $data['file'] = $file;
        }

        $proj = projects::query()->create($data);

        $proj->addMediaFromRequest('image')
            ->withResponsiveImages()
            ->usingName($proj->title)
            ->toMediaCollection('Projects');

        return Redirect::route('crm.add-proj');
    }
}
