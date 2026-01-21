<?php

namespace App\Http\Controllers;
use App\Models\TeacherProfile;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class TeacherDetailsController extends Controller
{
    public function show(TeacherProfile $teacherProfile, Request $request)
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


          $reviewableRequest = null;

if ($request->user() && $request->user()->role === 'student') {
    $reviewableRequest = ServiceRequest::query()
        ->where('student_id', $request->user()->id)
        ->where('teacher_profile_id', $teacherProfile->id)
        ->where('status', 'completed')
        ->whereDoesntHave('review')
        ->latest()
        ->first();
}
  

        return view('student.teacher-details', [
            'teacher' => $teacherProfile,
            'reviews' => $reviews,
            'reviewableRequest' => $reviewableRequest,
        ]);
    }
}
