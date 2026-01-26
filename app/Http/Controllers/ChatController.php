<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
   public function send(Request $request)
{
    $request->validate([
        'message' => ['required', 'string', 'max:2000'],
    ]);

    $userMessage = $request->message;

    $systemPrompt = "You are Mentory Assistant.

Mentory (Jordan high-school / Tawjihi) platform summary (must be accurate):
- Roles: Admin, Student, Teacher.
- Teachers create profiles; profiles appear to students ONLY after admin approval.
- Students browse approved teachers, send a request to a teacher.
- A student can have only ONE active request at a time (no new request until the current one is completed).
- Teachers accept/reject requests and can mark a request as completed.
- Students can rate/review ONLY after the request is completed (one completed request → one review).

Conversation style rules:
- Do NOT greet, do NOT say “Hi”, do NOT introduce yourself, and do NOT repeat the platform summary unless asked.
- Answer naturally and directly like a normal chat.
- Keep it short by default (2–6 lines). Expand only if the user asks for details.
- If the user asks a platform/how-to question, answer with the minimum helpful steps (not a long tutorial).
- If the user asks an academic question (Math/Physics/Chemistry/English/Arabic), solve it normally and clearly. Ask ONE clarifying question only if essential info is missing.
- Never claim you accessed accounts, performed actions, or verified anything. You only explain and guide.
- If the user’s role matters and is not known, ask once: “Are you a student, teacher, or admin?”
";

    $apiKey = env('GEMINI_API_KEY');
    $model  = env('GEMINI_MODEL', 'gemini-2.5-flash');

    $url = "https://generativelanguage.googleapis.com/v1beta/models/{$model}:generateContent?key={$apiKey}";

    $payload = [
        "contents" => [
            [
                "role" => "user",
                "parts" => [
                    ["text" => $systemPrompt . "\n\nUser: " . $userMessage]
                ]
            ]
        ]
    ];

    $res = \Illuminate\Support\Facades\Http::timeout(20)->post($url, $payload);

    if (!$res->successful()) {
        return response()->json([
            'reply' => 'Gemini error: ' . $res->status(),
        ], 500);
    }

    $data = $res->json();
    $reply = $data['candidates'][0]['content']['parts'][0]['text'] ?? 'No reply';

    return response()->json(['reply' => $reply]);
}

}
