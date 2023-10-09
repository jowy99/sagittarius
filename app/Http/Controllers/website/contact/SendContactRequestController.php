<?php

declare(strict_types=1);

namespace App\Http\Controllers\website\contact;

use App\Http\Controllers\Controller;
use App\Http\Requests\website\contact\SendContactEmailRequest;
use App\Mail\ContactRequestedMail;
use App\Models\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class SendContactRequestController extends Controller
{
    public function __invoke(SendContactEmailRequest $request): RedirectResponse
    {
        $contactRequest = ContactRequest::query()->create([
            'name' => $request->validated('name'),
            'surname' => $request->validated('surname'),
            'email' => $request->validated('email'),
            'message' => $request->validated('message'),
        ]);

        Mail::to(Config::get('mail.from.address'))
            ->send(new ContactRequestedMail($contactRequest));

        return Redirect::route('home')
            ->with([
                'name' => $contactRequest->full_name,
                'email' => $contactRequest->email,
            ]);
    }
}
