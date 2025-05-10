<?php

use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\skillscontroller;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\clients\HomeController as ClientsHomeController;
use App\Http\Controllers\clients\MessagesController;
use App\Http\Controllers\homeController;
use App\Models\Projects;
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


Route::get('/',[ClientsHomeController::class,'index']);

Route::get('/admin/home',[AdminHomeController::class,'index']);
Route::post('/admin/store',[AdminHomeController::class,'store'])->name('admin.store');

Route::put('/admin/edit',[AdminHomeController::class,'update'])->name('admin.update');

Route::get('/admin/skills',[skillscontroller::class,'index'])->name('admin.skills');
Route::post('/admin/skills',[skillscontroller::class,'create'])->name('admin.create');
Route::get('/admin/skills/delete/{id}',[skillscontroller::class,'delete'])->name('admin.delete');
Route::put('/admin/skills/edit/{id}',[skillscontroller::class,'update'])->name('admin.updateSkill');


Route::post('/admin/projects',[ProjectsController::class,'create'])->name('admin.createProject');
Route::get('/admin/projects/delete/{id}',[ProjectsController::class,'delete'])->name('admin.deleteProject');
Route::put('/admin/projects/edit/{id}',[ProjectsController::class,'update'])->name('admin.updateProject');

Route::put('admin/saveImage',[AdminHomeController::class,'saveImage'])->name('admin.saveImage');

Route::post('admin/education',[EducationController::class,'create'])->name('admin.createEducation');

Route::post('client/message',[MessagesController::class,'create'])->name('client.message');
