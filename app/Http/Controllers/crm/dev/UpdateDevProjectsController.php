<?php
declare(strict_types=1);

namespace App\Http\Controllers\crm\dev;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\crm\dev\UpdateDevProjectsRequest;
use App\Models\devs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\File;

class UpdateDevProjectsController extends Controller
{
    public function __invoke(UpdateDevProjectsRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $dev = devs::query()
            ->findOrFail($id);

        $dev->update($data);

        return Redirect::route('crm.edit-dev', $dev->id);
    }
}
