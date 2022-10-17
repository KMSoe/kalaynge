<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\GameItem;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fruits = Fruit::select('name', 'picture')->paginate(3);

        return $fruits;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = GameItem::findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $item,
            'previous' => $item->previous ? route('games.show', ['game' => $item->previous]) : null,
            'next' => $item->next ? route('games.show', ['game' => $item->next]) : null,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function checkAnswer(Request $request) 
    {
        $id = $request->id;
        $answer = $request->answer;

        $item = GameItem::findOrFail($id);
        
        if($answer == $item->correct_answer) {
            return response()->json([
                'status' => true,
                'message' => 'Great job',
                'previous' => $item->previous ? route('games.show', ['game' => $item->previous]) : null,
                'next' => $item->next ? route('games.show', ['game' => $item->next]) : null,
            ], 200); 
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Fail! Try again',
                'previous' => $item->previous ? route('games.show', ['game' => $item->previous]) : null,
                'next' => $item->next ? route('games.show', ['game' => $item->next]) : null,
            ], 400); 
        }
    }
}
