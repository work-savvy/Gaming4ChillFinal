<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Tournament;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function store(Request $request, $tournamentId)
    {
        $user = auth()->user();
        if (!$user) {
            return redirect()->route('login');
        }


        // Fetch the tournament, or fail if it doesn't exist
        $tournament = Tournament::findOrFail($tournamentId);

//        dd($tournament);
        if ($request->secret !== $tournament->secret_code) {
            return redirect()->route('view-tournament')
                ->with('error', 'Invalid secret code.');
        }
        // Check if the user has already registered for this tournament
        $existingRegistration = Registration::where('user_id', auth()->id())
            ->where('tournament_id', $tournament->id)
            ->first();

        if ($existingRegistration) {
            return redirect()->route('view-tournament')
                ->with('error', 'You have already registered for this tournament.');
        }

        // Validate the incoming request
        $validated = $request->validate([
            'form_unique_id' => 'required|string|size:5',
            // Add any other field validations you need
        ]);

        // Extract form data while excluding certain fields
        $formData = $request->except(['_token', 'form_unique_id','secret']);

        // Create a new registration record
        $registration = Registration::create([
            'user_id' => auth()->id(),
            'tournament_id' => $tournament->id,
            'payment_status' => 'pending',
            'form_unique_id' => $request->input('form_unique_id'),
            'form_data' => $formData,
        ]);

        // In your store() method, after successful registration:
        return redirect()->route('view-tournament')
            ->with('success', 'Your submission is pending for approval.')
            ->with('showModal', true); // Add this line
    }
}
