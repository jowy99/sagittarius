<?php
declare(strict_types=1);

namespace App\Http\Controllers\website\opinions;

use App\Http\Controllers\Controller;
use App\Models\opinions;
use Illuminate\Http\Request;
use App\Http\Requests\website\opinions\StoreOpinionsRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class StoreOpinionsController extends Controller
{
    public function __invoke(StoreOpinionsRequest $request): RedirectResponse
    {
        $data = $request->validated();
        opinions::query()->create($data);

        return Redirect::route('opinions');
    }
}
