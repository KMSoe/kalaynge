<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $numbers = Number::select('name', 'sorting', 'created_at')
            ->orderBy('sorting')
            ->orderBy('created_at')
            ->paginate(10);

        return $numbers;
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
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors(),
                'message' => 'Fill Input Data Correctly'
            ], 400);
        }

        $number = new Number();
        $number->symbol = $request->symbol;
        $number->name = $request->name;
        $number->category_id = 2;

        $image = $request->file('picture');

        $extension = $image->getClientOriginalExtension();
        $fileName  = $number->name . '.' . $extension;

        $destination = storage_path('app/public/numbers');

        if (File::exists($destination . '/' . $fileName)) {
            Storage::delete($destination . '/' . $fileName);
        }

        $image->storeAs($destination, $fileName);

        $number->picture = $fileName;
        $number->save();

        return response()->json([
            "status" => true,
            "messge" => 'Successfully added',
            "id" => $number->id,
            "data" => $number
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
        $item = Number::findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $item,
            'previous' => $item->previous ? route('numbers.show', ['number' => $item->previous]) : null,
            'next' => $item->next ? route('numbers.show', ['number' => $item->next]) : null,
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
        $number = Number::findOrFail($id);

        $validator = Validator::make(request()->all(), [
            "symbol" => 'required',
            "name" => 'required',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($validator->fails()) {
            return response()->json([
                "status" => false,
                "errors" => $validator->errors(),
                'message' => 'Fill Input Data Correctly'
            ], 400);
        }

        $number->symbol = $request->symbol;
        $number->name = $request->name;
        $number->category_id = 2;

        $image = $request->file('picture');

        if ($image) {
            $extension = $image->getClientOriginalExtension();
            $fileName  = $number->name . '.' . $extension;

            $destination = storage_path('app/public/numbers');

            if (File::exists($destination . '/' . $number->picture)) {
                Storage::delete($destination . '/' . $number->picture);
            }

            $image->storeAs(storage_path('app/public/numbers'), $fileName);

            $number->picture = $fileName;
        }
        $number->save();

        return response()->json([
            "status" => true,
            "messge" => 'Successfully updated',
            "id" => $number->id,
            "data" => $number
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
        // $number = Number::findOrFail($id);

        // $countDeleted = $number->delete();

        // if ($countDeleted) {
        //     return response()->json([], 204);
        // }
    }
}
