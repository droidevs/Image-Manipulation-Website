<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Http\Requests\StoreAlbumRequest;
use App\Http\Requests\UpdateAlbumRequest;
use App\Http\Resources\V1\AlbumResource;
use Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return AlbumResource::collection(Album::where()->paginate());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAlbumRequest $request)
    {
        $album = Album::create($request->all());
        return $album;
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Album $album)
    {
        if($request->user()->id != $album->user_id) {
            return abort(403,'Unautorised');
        }
        return new AlbumResource($album);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAlbumRequest $request, Album $album)
    {
        if($request->user()->id != $album->user_id) {
            return abort(403,'Unautorised');
        }
        $album->update($request->all());

        return new AlbumResource($album);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request,Album $album)
    {
        if($request->user()->id != $album->user_id) {
            return abort(403,'Unautorised');
        }
        $album->delete();

        return response('',204);
    }


}
