<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillsController;
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
// front view
Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/admin', [FrontController::class, 'dashboard'])->name('dashboard');

// back view
Route::get('/admin/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/admin/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/admin/skill', [SkillsController::class, 'index'])->name('skills.index');

// ***************************ABOUT*********************************************
// CRUD CREATE
Route::get('admin/about/create', [AboutController::class, 'create'])->name('about.create');
Route::post('admin/about/store', [AboutController::class, 'store'])->name('about.store');

// CRUD EDIT - UPDATE
Route::get('/admin/about/{id}/edit', [AboutController::class, 'edit'])->name('about.edit');
Route::put('/admin/about/{id}/update', [AboutController::class, 'update'])->name('about.update');


// CRUD DELETE
Route::delete('/admin/about/{id}/delete', [AboutController::class, 'destroy'])->name('about.destroy');

// CRUD SHOW
Route::get('/admin/about/{id}', [AboutController::class, 'show'])->name('about.show');


// **************************SKILLS************************************************
// CRUD CREATE
Route::get('admin/skills/create', [skillsController::class, 'create'])->name('skills.create');
Route::post('admin/skills/store', [skillsController::class, 'store'])->name('skills.store');

// CRUD EDIT - UPDATE
Route::get('/admin/skills/{id}/edit', [skillsController::class, 'edit'])->name('skills.edit');
Route::put('/admin/skills/{id}/update', [skillsController::class, 'update'])->name('skills.update');


// CRUD DELETE
Route::delete('/admin/skills/{id}/delete', [skillsController::class, 'destroy'])->name('skills.destroy');

// CRUD SHOW
Route::get('/admin/skills/{id}', [skillsController::class, 'show'])->name('skills.show');


// **************************PROJECT************************************************
// CRUD CREATE
Route::get('admin/project/create', [ProjectController::class, 'create'])->name('project.create');
Route::post('admin/project/store', [ProjectController::class, 'store'])->name('project.store');

// CRUD EDIT - UPDATE
Route::get('/admin/project/{id}/edit', [ProjectController::class, 'edit'])->name('project.edit');
Route::put('/admin/project/{id}/update', [ProjectController::class, 'update'])->name('project.update');


// CRUD DELETE
Route::delete('/admin/project/{id}/delete', [ProjectController::class, 'destroy'])->name('project.destroy');

// CRUD SHOW
Route::get('/admin/project/{id}', [ProjectController::class, 'show'])->name('project.show');
