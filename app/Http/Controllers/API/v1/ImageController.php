<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\ImageResource;
use App\Http\Resources\ImageCollection;
use App\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::paginate(15);
        return new ImageCollection($images);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = new Image();
        $image->name = $request->input('name');
        $image->title = $request->input('title');
        $image->description = $request->input('description');
        $image->user_id = $request->input('user_id');
        $image->category_id = $request->input('category_id');
        $image->views = $request->input('views');
        $image->likes = $request->input('likes');
        $image->dislikes = $request->input('dislikes');

        if ($image->save()) {
            return new ImageResource($image);
        } else {
            return response()->json('Error in saving image', 202);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);
        if (!is_null($image)) {
            return new ImageResource($image);
        } else {
            return response()->json('error', 404);
        }
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
        $image = Image::find($id);
        $image->name = $request->input('name');
        $image->title = $request->input('title');
        $image->description = $request->input('description');
        $image->user_id = $request->input('user_id');
        $image->category_id = $request->input('category_id');
        $image->views = $request->input('views');
        $image->likes = $request->input('likes');
        $image->dislikes = $request->input('dislikes');
        if ($image->update()) {
            return new ImageResource($image);
        } else {
            return response()->json('error is updating image', 202);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id);
        if ($image->delete()) {
            return new ImageResource($image);
        } else {
            return response()->json('error is deleting image', 202);
        }
    }
}
