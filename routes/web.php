<?php

use App\Http\Controllers\AudienceController;
use Illuminate\Support\Facades\Route;
use App\Models\Events;
use App\Models\User;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('portal');
});

Route::get('/checkin/{event?}', function ($event) {
    $event = Events::where('id', '=', $event)->firstOrFail();
    return view('checkin', compact('event'));
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get(
        '/dashboard',
        function () {
            $users = User::all();
            $elist = Events::all();
            $randomNumber = random_int(1, 100);
            $child = User::ChildList();
            return view('dashboard', compact(['users', 'elist', 'randomNumber', 'child']));
        }
    )->name('dashboard');
});
Route::controller(SearchController::class)->group(function () {
    Route::get('/dashboard/search', 'index');
    Route::post('/dashboard/search/{search?}', 'findData')->name('search');

})->name('search');

// Users
// Route::get('/dashboard/addaudience', [UserController::class, 'index'])->name('addaudience');
// Route::get('/dashboard/users', [UserController::class, 'index'])->name('users');

// Event
Route::controller(EventController::class)->group(function () {
    Route::get('/dashboard/events/new', 'index')->name('events');
    Route::post('/dashboard/events/add', 'store')->name('addEvents');
    Route::get('/dashboard/events/list', 'eventList')->name('eventslist');
    Route::get('/dashboard/events/view/{id?}', 'eventView')->name('eventview');
    Route::get('/dashboard/addaudienceview', 'addaudienceview')->name('addaudienceview');
    Route::post('/dashboard/addaudience', 'addaudience')->name('addaudience');
    Route::post('/checkInEvents', 'checkIn')->name('checkInEvents');
});

// Audience
Route::controller(AudienceController::class)->group(function () {
    Route::get('/dashboard/audience', 'index');
    Route::get('/dashboard/audience/{eid}', 'searchAudience')->name('audiencelist');
});

// Route::get('/dashboard/events/new', [EventController::class, 'index'])->name('events');
// Route::post('/dashboard/events/add', [EventController::class, 'store'])->name('addEvents');
// Route::get('/dashboard/events/list', [EventController::class, 'eventList'])->name('eventslist');
// Route::get('/dashboard/events/view/{id?}', [EventController::class, 'eventView'])->name('eventview');

//Public Link
// Route::post('/checkInEvents', [EventController::class, 'checkIn'])->name('checkInEvents');


// QR CODE
// Route::get('/generate-qrcode', [QrCodeController::class, 'index']);