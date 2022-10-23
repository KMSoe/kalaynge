<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QuizQuestion;
use App\Models\QuizQuestionAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuizController extends Controller
{
    public function index()
    {
        $data = QuizQuestion::with('answers')
            ->orderBy('quiz_type', 'ASC')
            ->orderBy('id', 'ASC')
            ->get();

        return response()->json([
            'status' => true,
            'total' => count($data),
            'data' => $data
        ], 200);
    }

    public function checkAnswer(Request $request, $id)
    {
        $valaditor = Validator::make($request->all(), [
            'answer_id' => 'required'
        ]);

        if($valaditor->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Please select one!'
            ], 400);
        }

        $answer_id = $request->answer_id;

        $quiz_mapping = QuizQuestionAnswer::where('quiz_question_id', $id)
            ->first();

        if(!$quiz_mapping) {
            return response()->json([
                'status' => false,
                'message' => 'Not Found!'
            ], 404);
        }

        if($quiz_mapping->quiz_answer_id == $answer_id) {
            return response()->json([
                'status' => true,
                'message' => 'Great Job!'
            ], 200);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Not Correct!'
            ], 400);
        }
    }
}
