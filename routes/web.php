
<?php
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/





Route::get('/', function () {
    return view('welcome');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index');
    // Route::get('/category/create', 'create');
    Route::post('/category/store', 'store');
    Route::get('/category/{id}/edit', 'edit');
    Route::put('/category/{id}', 'update');
    Route::delete('/category/{id}', 'destroy');
    Route::get('/category/print', [CategoryController::class, 'cetakPdf'])->name('category.print');
    Route::post('/category/create', [CategoryController::class, 'store']);

});


