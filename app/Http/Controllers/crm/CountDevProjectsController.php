<?php

namespace App\Http\Controllers\crm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\devs;

class CountDevProjectsController extends Controller
{
    public function __invoke(): string
    {
        return devs::query()->count();
    }
}
