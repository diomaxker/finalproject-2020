<?php



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
/* diomax edit*/

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;


route::get('/',[MainController::class, "index"]);
route::get('/insert/', [MainController::class, "insert"]);
route::get('/mylogout/', [MainController::class, "logout"]);
route::get('/remove/{id}/',[MainController::class, 'remove']);

/*Route::get('/', function () {

    return view('index');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/lucky/', function () {
    $lucky_number = rand(1, 49);
    $numbers = array();
    for ($i=0; $i<6; $i++) {
        $numbers[] = rand(1, 49);
    }
    return view('lotto', compact('lucky_number', 'numbers'));
});