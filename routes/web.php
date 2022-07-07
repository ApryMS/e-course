<?php

use App\Http\Controllers\Admin\BabController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\Payment;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\MentorController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BabVideoController;
use App\Http\Controllers\Mentor\SiswaController as MentorSiswaController;
use App\Http\Controllers\Pejuang\PejuangController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\VideoController;
use App\Models\User\Siswa;
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

// Route::get('/', function () {
//     return view('pages.dashboard');

// });


Auth::routes();
Route::match(["GET", "POST"], "/register", function () {
    return redirect("/login");
})->name("register");
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('mentor', MentorController::class)->middleware(['auth','admin']);
Route::get('transfer-fee-mentor/{id}', [MentorController::class, 'transferFeeMentor'])->name('transfer-fee-mentor')->middleware(['auth','admin']);
Route::post('post-transfer-fee-mentor/{id}', [MentorController::class, 'postTransferFeeMentor'])->name('post-transfer-fee-mentor')->middleware(['auth','admin']);
Route::resource('siswa', SiswaController::class)->middleware(['auth','admin']);
Route::resource('bab-video', BabVideoController::class)->middleware(['auth','admin']);
Route::resource('product', ProductController::class)->middleware(['auth','admin']);
Route::resource('video', VideoController::class)->middleware(['auth','admin']);
Route::resource('payment', PaymentController::class)->middleware(['auth','admin']);
Route::get('create-konfirmasi-pembayaran', [PaymentController::class, 'createKonfirmasiPembayaran'])->name('create-konfirmasi-pembayaran')->middleware(['auth','admin']);
Route::post('post-create-payment', [PaymentController::class, 'postConfirmPayment'])->name('post-create-payment')->middleware(['auth','admin']);
Route::get('history-payment', [PaymentController::class, 'historyPayment'])->name('history-payment')->middleware(['auth','admin']);
Route::get('metode-payment', [PaymentController::class, 'metodePayment'])->name('metode-payment')->middleware(['auth','admin']);
// Route::get('create-metode', [PaymentController::class, 'createMetode'])->name('create-metode');
Route::post('active-payment-metode/{id}', [PaymentController::class, 'activeStatusPaymentMetode'])->name('active-payment-metode')->middleware(['auth','admin']);
Route::post('non-active-payment-metode/{id}', [PaymentController::class, 'nonStatusPaymentMetode'])->name('non-active-payment-metode')->middleware(['auth','admin']);


//mentor
Route::resource('list-siswa', MentorSiswaController::class);
Route::post('/getregency', [MentorSiswaController::class, 'getRegency'])->name('getregency');
Route::get('/daftar-pejuang/{id}', [MentorSiswaController::class, 'daftarPejuang'])->name('daftar-pejuang');
Route::post('/post-pejuang/{id}', [MentorSiswaController::class, 'postPejuang'])->name('post-pejuang');

//pejuang
Route::resource('/pejuang', PejuangController::class);

//MENTOR & PEJUANG
Route::get('/history-payment-fee', [MentorSiswaController::class, 'historyPaymentFee'])->name('history-payment-fee');
Route::get('/profile', [PejuangController::class, 'profile'])->name('profile');
Route::post('/edit-profile/{id}', [PejuangController::class, 'editProfile'])->name('edit-profile');
Route::get('/list-confirmasi-pembayaran', [PejuangController::class, 'listConfirmasiPembayaran'])->name('list-confirmasi-pembayaran');
Route::get('/confirmasi-pembayaran', [PejuangController::class, 'confirmasiPembayaran'])->name('confirmasi-pembayaran');
Route::post('/post-create-payment', [PejuangController::class, 'postPembayaranSiswa'])->name('post-create-payment');
Route::get('/detail-confirmasi-pembayaran/{id}', [PejuangController::class, 'detailKonfirmasiPembayaran'])->name('detail-confirmasi-pembayaran');
Route::get('/detail-siswa/{id}', [PejuangController::class, 'detailSiswa'])->name('detail-siswa');



