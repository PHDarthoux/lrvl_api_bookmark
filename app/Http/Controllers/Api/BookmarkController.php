<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBookmarkRequest;
use App\Http\Requests\UpdateBookmarkRequest;
use App\Http\Resources\BookmarkResource;
use App\Models\Bookmark;
use Illuminate\Console\View\Components\Task;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return BookmarkResource::collection(Bookmark::all());
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookmarkRequest $request)
    {
        $bookmark = Bookmark::create($request->validated());

        return BookmarkResource::make($bookmark);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bookmark $bookmark)
    {
        return BookmarkResource::make($bookmark);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bookmark $bookmark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookmarkRequest $request, Bookmark $bookmark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bookmark $bookmark)
    {
        //
    }
}
