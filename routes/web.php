<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeacherDashboardController;



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

    Route::get('/teacher-profiles', function () {
        return view('admin.teacher-profiles');
    })->name('admin.teacher-profiles');

    Route::get('/teacher-profile/show', function () {
        return view('admin.teacher-profile-show');
    })->name('admin.teacher-profile.show');

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
});

/*Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/
require __DIR__.'/auth.php';
