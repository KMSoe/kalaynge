<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alphabet;
use Illuminate\Http\Request;

class AlphabetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alphabets = Alphabet::select('id', 'name', 'sorting', 'created_at')
            ->orderBy('sorting')
            ->orderBy('created_at')
            ->paginate(10);

        return $alphabets;
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
        $item = Alphabet::findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $item,
            'previous' => route('alphabets.show', ['alphabet' => $item->previous]),
            'next' => route('alphabets.show', ['alphabet' => $item->next]),
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
}
