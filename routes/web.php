<?php

use App\Http\Controllers\admin\EducationController;
use App\Http\Controllers\admin\HomeController as AdminHomeController;
use App\Http\Controllers\admin\ProjectsController;
use App\Http\Controllers\admin\skillscontroller;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\clients\HomeController as ClientsHomeController;
use App\Http\Controllers\clients\MessagesController;
use App\Http\Controllers\homeController;
use App\Models\PersonalInformation;
use App\Models\Projects;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Auth::routes(['register' => false]);


Route::get('/', [ClientsHomeController::class, 'index'])->name('client.home');
Route::post('client/message', [MessagesController::class, 'create'])->name('client.message');


Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/home', [AdminHomeController::class, 'index']);
    Route::post('/store', [AdminHomeController::class, 'store'])->name('admin.store');

    Route::put('/edit', [AdminHomeController::class, 'update'])->name('admin.update');

    Route::get('/skills', [skillscontroller::class, 'index'])->name('admin.skills');
    Route::post('/skills/create', [skillscontroller::class, 'create'])->name('admin.create');
    Route::get('/skills/delete/{id}', [skillscontroller::class, 'delete'])->name('admin.delete');
    Route::put('/skills/update/{id}', [skillscontroller::class, 'update'])->name('admin.updateSkill');


    Route::post('/projects', [ProjectsController::class, 'create'])->name('admin.createProject');
    Route::get('/projects/delete/{id}', [ProjectsController::class, 'delete'])->name('admin.deleteProject');
    Route::put('/projects/update/{id}', [ProjectsController::class, 'update'])->name('admin.updateProject');

    Route::put('/saveImage', [AdminHomeController::class, 'saveImage'])->name('admin.saveImage');

    Route::post('/education', [EducationController::class, 'create'])->name('admin.createEducation');
    Route::get('/education/delete/{id}', [EducationController::class, 'delete'])->name('admin.deleteEducation');
    Route::put('/education/update/{id}', [EducationController::class, 'update'])->name('admin.updateEducation');

    Route::get('/messages{id}', [MessagesController::class, 'delete'])->name('admin.deleteMessage');
});

Route::get('/download-cv', function () {
    $info = PersonalInformation::latest()->first();

    if (!$info || !$info->cv || !Storage::exists($info->cv)) {
        abort(404);
    }

    return Storage::download($info->cv, 'CV.pdf'); // اسم الملف النهائي للمستخدم
})->name('download.cv');


Route::get('/homep', [homeController::class, 'index'])->name('home');
