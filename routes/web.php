<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\DirectincomeController;
use App\Http\Controllers\EpinController;
use App\Http\Controllers\EpinRequestedController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AllusersListController;
use App\Http\Controllers\TreeViewController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\ItemController;
// Route::get('/allreports', function () {
//     return view('allreports');
// });

// Route::view('dashboard', 'index');

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('/', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

Route::get('users', [UsersController::class, 'usersPage'])->name('users');
Route::get('users', [UsersController::class, 'index']);

// Route::get('users', [UsersController::class, 'falledmsg']);
// Route::get('users', [UsersController::class, 'successmsg']);

Route::post('levelSettingo', [CustomAuthController::class, 'levelSettingo'])->name('levelSettingo');
Route::get('levelSetting', [CustomAuthController::class, 'levelSetting']);
Route::get('levelSetting', [CustomAuthController::class, 'levelSetting'])->name('levelSetting');
Route::get('levelSetting', [CustomAuthController::class, 'levelindex']);

Route::get('income', [IncomeController::class, 'levelincome']);

Route::get('directincome', [DirectincomeController::class, 'directIncome']);

Route::get('epinOrder', [EpinController::class, 'index']);

Route::post('requestEpin', [EpinController::class, 'requestEpin'])->name('requestEpin');

Route::post('sendEpinsend', [EpinRequestedController::class, 'sendEpin'])->name('sendEpinsend');

// Route::post('epinRequested', [EpinRequestedController::class, 'sendEpin'])->name('sendEpin');
// Route::get('epinRequested', [EpinRequestedController::class, 'sendEpin'])->name('sendEpin');

Route::get('myepin', [EpinRequestedController::class, 'epinRequested']);

Route::get('epinRequested', [EpinRequestedController::class, 'forAllusersRequest']);

Route::post('epinRequested', [EpinRequestedController::class, 'forAllusersRequest']);

Route::get('index', [CustomAuthController::class, 'totalMembers']);
// Route::get('index', [CustomAuthController::class, 'TotalCommission']);

Route::get('profile', [ProfileController::class, 'myProfile']);
Route::post('profile', [ProfileController::class, 'updateMyprofile'])->name('updateMyprofile');

Route::get('alluserslist', [AllusersListController::class, 'allUsersListPage']);

Route::get('treeview/{refkey}', [TreeViewController::class, 'treeView']);

Route::get('reports', [ReportsController::class, 'reportsList']);
Route::post('reports', [ReportsController::class, 'reportsList'])->name('reports');

Route::get('directoutcome', [ReportsController::class, 'directOutcome']);
Route::post('directoutcome', [ReportsController::class, 'directOutcome'])->name('directoutcome');

Route::get('comincome', [ReportsController::class, 'comincomes']);
Route::post('comincome', [ReportsController::class, 'comincomes'])->name('icome');

Route::get('items', [ItemController::class, 'index']);

Route::get('users', [UsersController::class, 'allUsersListPage']);



