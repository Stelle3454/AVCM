<?php
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AvcmController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/doctors', [AvcmController::class, 'index']);
Route::post('/doctors', [AvcmController::class, 'store']);
Route::put('/doctors/{id}', [AvcmController::class, 'update']);
Route::delete('/doctors/{id}', [AvcmController::class, 'destroy']);


Route::resource('/patient', PatientController::class);
Route::get('/patient', [PatientController::class, 'index']);
Route::post('/patient',[PatientController::class, 'store']);

Route::resource('/login', LoginController::class);
Route::resource('/login', LoginController::class)->only(['index', 'store']);



Route::post('/register', [UserController::class, 'register']);//user
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);