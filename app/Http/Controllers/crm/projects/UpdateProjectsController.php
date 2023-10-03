<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\projects;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\crm\projects\UpdateProjectsRequest;
use App\Models\projects;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class UpdateProjectsController extends Controller
{
    public function __invoke(UpdateProjectsRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();
        $proj = projects::query()->findOrFail($id);
        $proj->update($data);

        return Redirect::route('crm.edit-proj', $proj->id);
    }
}
