<?php

namespace App\Http\Controllers;

use App\Models\TeacherProfile;

class TeacherDetailsController extends Controller
{
    public function show(TeacherProfile $teacherProfile)
    {
        // للـ Guest/Student: ما نعرض إلا approved
        if ($teacherProfile->status !== 'approved') {
            abort(404);
        }

        // تحميل العلاقات + احصائيات التقييم
        $teacherProfile->load(['subject', 'branch', 'user']);
        $teacherProfile->loadCount('reviews');
        $teacherProfile->loadAvg('reviews', 'rating');

        // آخر التقييمات (مع اسم الطالب)
        $reviews = $teacherProfile->reviews()
            ->with(['serviceRequest.student'])
            ->latest()
            ->take(10)
            ->get();

        return view('student.teacher-details', [
            'teacher' => $teacherProfile,
            'reviews' => $reviews,
        ]);
    }
}
