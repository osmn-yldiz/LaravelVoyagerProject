<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Http\Request;
use App\Models\NewsletterLists;
use App\Models\ContactLists;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('locale/{locale}', [LanguageController::class, 'index'])->name('locale');

Route::post('newsletter', function (Request $request) {

    if (!$request->name || !$request->phone || !$request->email) {
        return redirect()->route('home')->with('error', 'Lütfen boş alan bırakmayınız!');
    }

    $add_newsletter = NewsletterLists::insert([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'created_at' => date("Y-m-d"),
    ]);

    if ($add_newsletter) {
        return redirect()->route('home')->with('message', 'Tebrikler abone listesine başarıyla kayıt oldunuz.');
    }

})->name('newsletter');

Route::post('contact', function (Request $request) {

    if (!$request->name || !$request->email || !$request->subject || !$request->message) {
        return redirect()->route('home')->with('error', 'Lütfen boş alan bırakmayınız!');
    }

    $add_contact = ContactLists::insert([
        'name' => $request->name,
        'email' => $request->email,
        'subject' => $request->subject,
        'message' => $request->message,
        'created_at' => date("Y-m-d"),
    ]);

    if ($add_contact) {
        return redirect()->route('home')->with('message', 'Tebrikler mesajınız başarıyla iletilmiştir.');
    }

})->name('contact');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
