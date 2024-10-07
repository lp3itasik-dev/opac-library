<?php


use App\Http\Controllers\Backend\DesideratasController;
use App\Http\Controllers\Backend\RepositoriesController;
use App\Http\Controllers\Backend\TypeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApproverepoController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\BcController;
use App\Http\Controllers\BerandaadminController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BookchapterController;
use App\Http\Controllers\DaftarapproverepoController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\DesiderataController;
use App\Http\Controllers\EbController;
use App\Http\Controllers\EditrepoController;
use App\Http\Controllers\InputrepoController;
use App\Http\Controllers\InputarsipController;
use App\Http\Controllers\InputpedomanController;
use App\Http\Controllers\InputrepouserController;
use App\Http\Controllers\PedomanController;
use App\Http\Controllers\PustakawanController;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\SearchrepoController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TyperepoController;
use App\Http\Controllers\VbcebookController;
use App\Http\Controllers\ViewrepoController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\WelcomeController;

use App\Models\Daftarrepo;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BerandaController::class,'index'])->name('welcome.index');

Route::resource('welcome', WelcomeController::class);

Route::middleware(['auth', 'status:1', 'role:A'])->group(function () {
    Route::resource('type', TypeController::class);
    Route::resource('desiderata', DesiderataController::class);
    Route::resource('bcebook', BookchapterController::class);
    Route::resource('daftarapproverepo', DaftarapproverepoController::class);
    Route::resource('inputrepo', InputrepoController::class);
    Route::resource('bookchapter', BookchapterController::class);
    Route::resource('inputpedoman', InputpedomanController::class);
    Route::resource('inputarsip', InputarsipController::class);
    Route::resource('vbcebook', VbcebookController::class);
    Route::resource('arsip', ArsipController::class);
    Route::resource('pedoman', PedomanController::class);
    Route::resource('editrepo', EditrepoController::class);
});

Route::middleware(['auth', 'status:1'])->group(function () {
    Route::resource('inputrepouser', InputrepouserController::class);
    Route::resource('daftar', DaftarController::class);
});

Route::resource('service', ServiceController::class)->middleware(['auth']);
Route::resource('detailrepo', InputrepoController::class)->middleware(['auth']);
Route::resource('searchrepo', SearchrepoController::class);
Route::resource('viewrepo', ViewrepoController::class);
Route::resource('bc', BcController::class);
Route::resource('eb', EbController::class);

Route::resource('approverepo', ApproverepoController::class)->middleware(['auth']);

Route::get('/about', [AboutController::class,'index'])->name('about.index');


// Route::get('/viewrepo', [ViewrepoController::class,'index'])->name('viewrepo.index');

// Route::get('/approverepo', [ApproverepoController::class,'index'])->name('approverepo.index');





Route::get('/berandaadmin', [BerandaadminController::class,'index'])->name('berandaadmin.index');


Route::get('/repository', [RepositoryController::class,'index'])->name('repository.index');

Route::get('/visimisi', [VisimisiController::class,'index'])->name('visimisi.index');

Route::get('/pustakawan', [PustakawanController::class,'index'])->name('pustakawan.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('/types', TypeController::class)->middleware(['auth']);
Route::resource('/repositories', RepositoriesController::class)->middleware(['auth']);
Route::resource('/desideratas', DesideratasController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
