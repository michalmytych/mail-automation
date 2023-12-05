<?php

use App\Models\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Wyswietlanie wszystkich modeli
Route::get('/mails', function () {
    return Mail::latest()->get();
})->name('mail.index');

Route::get('/mails/create', function () {
    return view('mails.create');
});

Route::post('/mails/store', function (Request $request) {

    $qrCodeValue = $request->get('qr_code_value');

    if ($qrCodeValue === null) {
        return 'Musisz uzupełnić kolumnę Qr code value!';
    }

    if (strlen($qrCodeValue) > 255) {
        return 'Kolumna Qr code value nie moze byc dluzsza niz 255 znakow!';
    }

    $mail = new Mail();
    $mail->qr_code_value = $request->get('qr_code_value');
    $mail->save();

    return to_route('mail.index');

})->name('mail.store');

// Szukanie po kolumnie innej niz id
Route::get('/mails/by-qr-code/{qr_code_value}', function (string $qrCodeValue) {
    return Mail::firstWhere(['qr_code_value' => $qrCodeValue]);
});

// Szukanie po kolumnie id modelu
Route::get('/mails/{mail}', function (Mail $mail) {
    return $mail;
});
