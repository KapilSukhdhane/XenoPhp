<?php
use App\Services\Route;
use App\Middlewere\{Auth,Guest};

Route::add('/login','LoginController','index','GET',[Guest::class]);
Route::add('/','HomeController','index','GET');
Route::add('/dashboard','DashboardController','index','GET',[Auth::class]);
Route::add('/register','RegisterController','index','GET',[Guest::class]);
Route::add('/submit-register','RegisterController','userRegister','POST');
Route::add('/submit-login','LoginController','userLogin','POST');
Route::add('/logout','DashboardController','logOut','GET');

?>

