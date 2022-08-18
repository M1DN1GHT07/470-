 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productscontroll;
use App\Http\Controllers\admin;
use App\Http\Controllers\studentcontroller;
use App\Http\Controllers\Resultcontroller;
use App\Models\Student;
use App\Models\Results;
use App\Models\library;
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
    return view('home');
});
Route::get('/Home', [Productscontroll::class,'index'])->name ('Home');
Route::get('/About', [Productscontroll::class,'About'])->name ('About');
Route::get('/Courses', [Productscontroll::class,'Courses'])->name ('Courses');
Route::get('/Notice', [Productscontroll::class,'Notice'])->name ('Notice');
Route::get('/faculty', [Productscontroll::class,'faculty'])->name ('faculty');
Route::get('/library', [Productscontroll::class,'library'])->name ('library');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/student', [admin::class,'student'])->name ('student');


Route::get('/Student', [studentcontroller::class,'index']);
Route::post('/Student', [studentcontroller::class,'store']);


Route::get('/Result', [Resultcontroller::class,'index']);
Route::post('/Result', [Resultcontroller::class,'store']);



Route::get('/student/view', [studentcontroller::class,'view'])->name('view');
Route::get('/student/resultview', [Resultcontroller::class,'view'])->name('resultview');

Route::get('/student/view/delete/{id}', [studentcontroller::class,'delete'])->name('delete');
Route::get('/student/view/edit/{id}', [studentcontroller::class,'edit'])->name('edit');
Route::post('/student/view/update/{id}', [studentcontroller::class,'update'])->name('update');

Route::get('/result', [admin::class,'result'])->name ('result');