<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EtatcommandeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


// ROUTE POUR LA PAGE D'ACCUEIL
Route::get('/', [HomeController::class, 'accueil']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/choix', [HomeController::class, 'choix']);

// ROUTE POUR L'AUTHENTIFICATION
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::get('/creercompte', [RegisterController::class, 'createcompte'])->name('register');
Route::get('/logout', [LoginController::class, 'deconnexion']);
Route::post('/login', [LoginController::class, 'faireConnexion']);
Route::post('/creercompte', [RegisterController::class, 'connecte']);

// ROUTE POUR PAGE APRES AUTHENTIFICATION
Route::get('/pageclient', [HomeController::class, 'pageClient'])->name('pageclient')->middleware('auth');
Route::get('/commande',[EtatcommandeController::class, 'commande'])->middleware('auth');
Route::get('/recap/{commande}',[EtatcommandeController::class, 'recap'])->name('recap.commande')->middleware('auth');
Route::post('/commande',[EtatcommandeController::class, 'store'])->middleware('auth');
Route::get('/profile', [HomeController::class, 'profil'])->name('profile')->middleware('auth');
Route::get('/adminpage', [HomeController::class, 'admin'])->name('adminpage')->middleware('auth');
Route::get('/utilisateur', [HomeController::class, 'utilisa'])->name('utilisateur');
Route::get('/livreur', [HomeController::class, 'livraison'])->name('livreur');




// FAIS PAREIL POUR LES AUTRES


Route::get('/admin', function(){
    return view('layouts/dashboard');
});

Route::get('/oublie', function(){
    return view('pages/oublie');
});





Route::get('/creercomptelivreur', function(){
    return view('pages/creercomptelivreur');
});

Route::get('/finalisation', function(){
    return view('pages/finalisation');
});

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
