<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alphabet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AlphabetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alphabets = Alphabet::orderBy('sorting')
            ->get();

        return response()->json([
            'status' => true,
            'total' => count($alphabets),
            'data' => $alphabets
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            "symbol" => 'required',
            "name" => 'required',
            "sample_word" => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors(),
                'message' => 'Fill Input Data Correctly'
            ], 400);
        }

        $alphabet = new Alphabet();
        $alphabet->symbol = $request->symbol;
        $alphabet->name = $request->name;
        $alphabet->sample_word = $request->sample_word;
        $alphabet->category_id = 1;

        $image = $request->file('picture');

        $extension = $image->getClientOriginalExtension();
        $fileName  = $alphabet->name . '.' . $extension;

        $destination = storage_path('app/public/alphabets');

        if (File::exists($destination . '/' . $fileName)) {
            Storage::delete($destination . '/' . $fileName);
        }

        $image->storeAs($destination, $fileName);

        $alphabet->picture = $fileName;
        $alphabet->save();

        return response()->json([
            "status" => true,
            "messge" => 'Successfully added',
            "id" => $alphabet->id,
            "data" => $alphabet
        ], 201);
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
            'previous' => $item->previous ? route('alphabets.show', ['alphabet' => $item->previous]) : null,
            'next' => $item->next ? route('alphabets.show', ['alphabet' => $item->next]) : null,
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
        $alphabet = Alphabet::findOrFail($id);

        $validator = Validator::make(request()->all(), [
            "symbol" => 'required',
            "name" => 'required',
            "sample_word" => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors(),
                'message' => 'Fill Input Data Correctly'
            ], 400);
        }

        $alphabet->symbol = $request->symbol;
        $alphabet->name = $request->name;
        $alphabet->sample_word = $request->sample_word;
        $alphabet->category_id = 1;

        $image = $request->file('picture');

        if ($image) {
            $extension = $image->getClientOriginalExtension();
            $fileName  = $alphabet->name . '.' . $extension;

            $destination = storage_path('app/public/alphabets');

            if (File::exists($destination . '/' . $alphabet->picture)) {
                Storage::delete($destination . '/' . $alphabet->picture);
            }

            $image->storeAs($destination, $fileName);

            $alphabet->picture = $fileName;
        }

        $alphabet->save();

        return response()->json([
            "status" => true,
            "messge" => 'Successfully updated',
            "id" => $alphabet->id,
            "data" => $alphabet
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $alphabet = Alphabet::findOrFail($id);

        // $countDeleted = $alphabet->delete();

        // if ($countDeleted) {
        //     return response()->json([], 204);
        // }
    }
}
