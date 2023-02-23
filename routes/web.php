<?php

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
    // dd($event);
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
Route::get('/dashboard/users', [UserController::class, 'index'])->name('users');

// Event
Route::get('/dashboard/events/new', [EventController::class, 'index'])->name('events');
Route::post('/dashboard/events/add', [EventController::class, 'store'])->name('addEvents');
Route::get('/dashboard/events/list', [EventController::class, 'eventList'])->name('eventslist');
Route::get('/dashboard/events/view/{id?}', [EventController::class, 'eventView'])->name('eventview');


//Public Link
Route::post('/CheckInEvents', [EventController::class, 'checkIn'])->name('CheckInEvents');

// QR CODE
Route::get('/generate-qrcode', [QrCodeController::class, 'index']);


// Cache
//Clear route cache:
Route::get('/route-cache', function () {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});

//Clear config cache:
Route::get('/config-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});

// Clear application cache:
Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});

// Clear view cache:
Route::get('/view-clear', function () {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});