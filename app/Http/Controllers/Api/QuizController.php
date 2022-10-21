<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\QuizQuestion;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $data = QuizQuestion::with('answers')
            ->orderBy('game_type', 'ASC')
            ->orderBy('id', 'ASC')
            ->get();

        return response()->json([
            'status' => true,
            'total' => count($data),
            'data' => $data
        ], 200);
    }
}
