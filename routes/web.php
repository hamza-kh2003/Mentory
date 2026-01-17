<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\AdminTeacherProfileController;
use App\Http\Controllers\AdminStudentController;
use App\Http\Controllers\AdminTeacherController;
use App\Http\Controllers\AdminReviewController;
use App\Http\Controllers\AdminSubjectBranchController;



/*Route::get('/', function () {
    return view('student.home');
})->name('pages.home');

Route::get('/teachers', function () {
    return view('student.teachers');
})->name('pages.teachers');

Route::get('/teacher-details', function () {
    return view('student.teacher-details');
})->name('student.teacher-details');

Route::get('/account', function () {
    return view('pages.account');
})->name('pages.account');

Route::get('/requests', function () {
    return view('student.requests');
})->name('student.requests');

Route::get('/favorites', function () {
    return view('student.favorites');
})->name('student.favorites');

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');


Route::prefix('admin')->group(function () {
    Route::get('/teacher-profiles', function () {
        return view('admin.teacher-profiles');
    })->name('admin.teacher-profiles');

    Route::get('/students', function () {
        return view('admin.students');
    })->name('admin.students');

    Route::get('/teachers', function () {
        return view('admin.teachers');
    })->name('admin.teachers');

    Route::get('/reviews', function () {
        return view('admin.reviews');
    })->name('admin.reviews');
    Route::get('/subjects-branches', function () {
        return view('admin.subjects-branches');
    })->name('admin.subjects-branches');
    Route::get('/teacher-profile/show', function () {
        return view('admin.teacher-profile-show');
    })->name('admin.teacher-profile.show');
});*/


/*
|--------------------------------------------------------------------------
| Public (Guest) - متاح للجميع
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('student.home');
})->name('pages.home');

Route::get('/teachers', function () {
    return view('student.teachers');
})->name('pages.teachers');

Route::get('/teacher-details', function () {
    return view('student.teacher-details');
})->name('student.teacher-details');

// Favorites بدك إياه يشتغل للجست كمان (session)
Route::get('/favorites', function () {
    return view('student.favorites');
})->name('student.favorites');

// Requests (للجست مسموح يدخلها بس فاضية - زي ما حكيت)
Route::get('/requests', function () {
    return view('student.requests');
})->name('student.requests');


/*
|--------------------------------------------------------------------------
| Authenticated (أي حد عامل login) - My Account + Profile Breeze
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    // My Account (بدها login للجميع: student/teacher/admin)
    Route::get('/account', function () {
        return view('pages.account');
    })->name('pages.account');

    // Breeze profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:student'])->group(function () {
    // مبدئياً انت مخلي requests + favorites متاحين للكل، فهون مش لازم تحطهم
    // بس لاحقاً لما تعمل أفعال (POST/DELETE) خلّيها هون للطالب فقط
});


/*
|--------------------------------------------------------------------------
| Teacher Only
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'role:teacher'])->group(function () {
     Route::get('/teacher/dashboard', [TeacherDashboardController::class, 'index'])
        ->name('teacher.dashboard');

    Route::post('/teacher/profile', [TeacherDashboardController::class, 'saveProfile'])
        ->name('teacher.profile.save');

    Route::delete('/teacher/profile', [TeacherDashboardController::class, 'deleteProfile'])
        ->name('teacher.profile.delete');


});


/*
|--------------------------------------------------------------------------
| Admin Only
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->middleware(['auth', 'role:admin'])->group(function () {

  Route::get('/teacher-profiles', [AdminTeacherProfileController::class, 'index'])
    ->name('admin.teacher-profiles');

Route::get('/teacher-profiles/{profile}', [AdminTeacherProfileController::class, 'show'])
    ->name('admin.teacher-profiles.show');

Route::patch('/teacher-profiles/{profile}/approve', [AdminTeacherProfileController::class, 'approve'])
    ->name('admin.teacher-profiles.approve');

Route::patch('/teacher-profiles/{profile}/reject', [AdminTeacherProfileController::class, 'reject'])
    ->name('admin.teacher-profiles.reject');

Route::patch('/teacher-profiles/{profile}/toggle-featured', [AdminTeacherProfileController::class, 'toggleFeatured'])
    ->name('admin.teacher-profiles.toggleFeatured');

Route::get('/students', [AdminStudentController::class, 'index'])
    ->name('admin.students');

Route::delete('/students/{student}', [AdminStudentController::class, 'destroy'])
    ->name('admin.students.destroy');

Route::get('/teachers', [AdminTeacherController::class, 'index'])
    ->name('admin.teachers');

Route::delete('/teachers/{teacher}', [AdminTeacherController::class, 'destroy'])
    ->name('admin.teachers.destroy');

Route::get('/reviews', [AdminReviewController::class, 'index'])
    ->name('admin.reviews');

Route::delete('/reviews/{review}', [AdminReviewController::class, 'destroy'])
    ->name('admin.reviews.destroy');

Route::get('/subjects-branches', [AdminSubjectBranchController::class, 'index'])
    ->name('admin.subjects-branches');

Route::post('/subjects', [AdminSubjectBranchController::class, 'storeSubject'])
    ->name('admin.subjects.store');

Route::post('/branches', [AdminSubjectBranchController::class, 'storeBranch'])
    ->name('admin.branches.store');
});

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/
require __DIR__.'/auth.php';
