<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
 
class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'    => ['required', 'string', 'max:255'],
            'phone'   => ['required', 'string', 'max:30'],
            'message' => ['required', 'string', 'max:2000'],
        ]);
 
        // TODO: persist the message, e.g. Message::create($validated);
        // or notify an admin, e.g. Notification::route('mail', ...)->notify(...);
 
        return back()->with('status', 'Thanks — your message has been sent!');
    }
}
 