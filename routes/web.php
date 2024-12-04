<?php

use App\Models\TaxPayment;
use App\Livewire\Agent\PaymentUser;
use App\Livewire\Agent\TextPayment;
use App\Livewire\Agent\RegisterUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Govt\GovtController;
use App\Http\Controllers\Agent\AgentController;
use App\Http\Controllers\Govt\LogoutController;




Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/index', function () {
    return view('frontend.index');
});

Route::get('/about-us', function () {
    return view('frontend.about');
});

Route::get('/features', function () {
    return view('frontend.features');
});

Route::get('/services', function () {
    return view('frontend.services');
});

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/faq', function () {
    return view('frontend.faq');
});

Route::get('/contact', function () {
    return view('frontend.contact');
});



//Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified', 'agent'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');




    Route::get('agent/payment',[AgentController::class,  'index'])
    ->name('agent-payment')->middleware('agent');
    Route::get('agent/payment-history',[AgentController::class,  'historypage'])
    ->name('payment-page')->middleware('agent');

    Route::get('agent/create',RegisterUser::class);
    Route::get('agent/payment/page/',PaymentUser::class);
    Route::get('agent/payment/page/test/', TextPayment::class);






// Route::get('/brands', App\Http\livewire\Admin\Brand\Index::class);


Route::get('govt/dashboard',[GovtController::class,  'indexDashboard'])
->name('govt-dashboard')->middleware('govt');


Route::get('govt/user-list',[GovtController::class,  'indexuser'])
->name('govt-user-list')->middleware('govt');


Route::post('govt/logout',[LogoutController::class,  'logout'])
->name('logout-govt');



// Route::get('/testing', function () {
//    // $taxPayments = TaxPayment::all();
//     return view('govt.users.userlist');
// });








require __DIR__.'/auth.php';
