<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Nature;
use Illuminate\Http\Request;

class NatureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Nature::paginate(3);

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Nature::findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $item,
            'previous' => $item->previous ? route('natures.show', ['nature' => $item->previous]) : null,
            'next' => $item->next ? route('natures.show', ['nature' => $item->next]) : null,
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function edit(Nature $nature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nature $nature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nature  $nature
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $nature = Nature::findOrFail($id);

        // $countDeleted = $nature->delete();

        // if($countDeleted) {
        //     return response()->json([], 204);
        // }
    }
}
