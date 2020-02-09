<?php

namespace App\Http\Controllers\API;

use App\Picture;
use App\Http\Resources\PictureCollection;
use App\Http\Resources\PictureResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PictureAPIController extends Controller
{
    public function index()
    {
        return new PictureCollection(Picture::paginate());
    }
 
    public function show(Picture $picture)
    {
        return new PictureResource($picture->load(['customer']));
    }

    public function store(Request $request)
    {
        return new PictureResource(Picture::create($request->all()));
    }

    public function update(Request $request, Picture $picture)
    {
        $picture->update($request->all());

        return new PictureResource($picture);
    }

    public function destroy(Request $request, Picture $picture)
    {
        $picture->delete();

        return response()->noContent();
    }
}
