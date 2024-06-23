<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'score' => 'required|integer|min:1|max:10',
            'comment' => 'required|string|max:1000',
        ]);

        // Create new evaluation
        Evaluation::create([
            'teacher_id' => $request->teacher_id,
            'score' => $request->score,
            'comment' => $request->comment,
        ]);

        return redirect()->back()->with('success', 'Evaluation added successfully.');
    }
}
