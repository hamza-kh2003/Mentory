<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Subject;
use App\Models\TeacherProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherDashboardController extends Controller
{
    public function index(Request $request)
    {
        $user = $request->user();
        $profile = $user->teacherProfile;

        $subjects = Subject::orderBy('name')->get();
        $branches = Branch::orderBy('name')->get();

        $requests = $profile
            ? $profile->serviceRequests()->with('student')->latest()->get()
            : collect();

        return view('teacher.dashboard', compact('profile', 'subjects', 'branches', 'requests'));
    }

    public function saveProfile(Request $request)
    {
        $user = $request->user();
        $profile = $user->teacherProfile; // null أو موجود

        $data = $request->validate([
            'display_name' => ['required', 'string', 'max:255'],
            'subject_id' => ['required', 'exists:subjects,id'],
            'branch_id' => ['required', 'exists:branches,id'],
            'experience_years' => ['required', 'integer', 'min:0', 'max:60'],
            'phone' => ['required', 'string', 'max:30'],
            'bio' => ['nullable', 'string', 'max:2000'],
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        // رفع/تحديث الصورة
        if ($request->hasFile('image')) {
            if ($profile && $profile->image_path) {
                Storage::disk('public')->delete($profile->image_path);
            }
            $data['image_path'] = $request->file('image')->store('teachers', 'public');
        }

        // create أول مرة
        if (!$profile) {
            $data['user_id'] = $user->id;
            $data['status'] = 'pending';
            $data['is_featured'] = false;

            TeacherProfile::create($data);

            return back()->with('success', 'تم إرسال بروفايلك للمراجعة.');
        }

        // update
        $profile->update($data);

        return back()->with('success', 'تم تحديث البروفايل.');
    }

    public function deleteProfile(Request $request)
    {
        $profile = $request->user()->teacherProfile;

        if (!$profile) {
            return back()->with('error', 'لا يوجد بروفايل.');
        }

        if ($profile->image_path) {
            Storage::disk('public')->delete($profile->image_path);
        }

        $profile->delete();

        return back()->with('success', 'تم حذف البروفايل.');
    }
}
