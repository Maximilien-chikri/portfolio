<?php

use App\Http\Controllers\FrontContoller;
use App\Http\Controllers\PortfolioController;
use App\Models\Portfolio;
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

Route::get('/', [FrontContoller::class, 'index'])->name('home');

Route::get('/admin', function () {
    return view('admin.main');
})->name('admin');


//BACKOFFICE 

//CRUD PARTIE PORTFOLIO
    //index/READ
Route::get('/admin/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    //show/READ
Route::get('/admin/portfolio/{id}', [PortfolioController::class, 'show'])->name('porfolio.show');
    //Delete
Route::delete('/admin/portfolio/{id}/destroy', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');
    //Update
Route::get('/admin/portfolio/{id}/edit', [PortfolioController::class, 'edit'])->name('portfolio.edit');
Route::put('/admin/portfolio/{id}/update', [PortfolioController::class, 'update'])->name('portfolio.update');
    //Create
Route::get('/admin/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
Route::post('/admin/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');