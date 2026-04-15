<?php

use App\Models\Event;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// 1. This group is PROTECTED. You MUST use Basic Auth to see this data.
Route::middleware('auth.basic')->group(function () {

    // Route to get all 100 Events
    Route::get('/events', function () {
        return Event::all();
    });

    // Route to get all 900 Participants
    Route::get('/participants', function () {
        return Participant::all();
    });

    // Shows the logged-in admin details
    Route::get('/admin-info', function (Request $request) {
        return $request->user();
    });

});

// 2. This route is PUBLIC (Optional: if you want to show data without login)
Route::get('/system-status', function () {
    return response()->json(['status' => 'Event System is Online']);
});