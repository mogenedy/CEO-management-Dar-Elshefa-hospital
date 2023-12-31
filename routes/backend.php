<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\DashboardController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


/*
|--------------------------------------------------------------------------
| backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/dashboard/admin',[DashboardController::class,'index']);

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 
        

Route::get('/dashboard/user', function () {
            return view('dashboard.user.index');
        })->middleware(['auth', 'verified'])->name('dashboard.user');
        
        
        Route::get('/dashboard/admin', function () {
            return view('dashboard.admin.index');
        })->middleware(['auth:admin', 'verified'])->name('dashboard.admin');
        
        
        
        require __DIR__.'/auth.php';






    });
        
        




