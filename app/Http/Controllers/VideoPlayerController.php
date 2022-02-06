<?php

namespace App\Http\Controllers;

use App\Models\videoPlayer;
use App\Http\Requests\StorevideoPlayerRequest;
use App\Http\Requests\UpdatevideoPlayerRequest;
use App\Models\course;
use Illuminate\Http\Request;

class VideoPlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       $course= course::find($request->id);
        return view('user.videoPlayer.index',compact('course'));
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
     * @param  \App\Http\Requests\StorevideoPlayerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorevideoPlayerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\videoPlayer  $videoPlayer
     * @return \Illuminate\Http\Response
     */
    public function show(videoPlayer $videoPlayer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\videoPlayer  $videoPlayer
     * @return \Illuminate\Http\Response
     */
    public function edit(videoPlayer $videoPlayer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatevideoPlayerRequest  $request
     * @param  \App\Models\videoPlayer  $videoPlayer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatevideoPlayerRequest $request, videoPlayer $videoPlayer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\videoPlayer  $videoPlayer
     * @return \Illuminate\Http\Response
     */
    public function destroy(videoPlayer $videoPlayer)
    {
        //
    }
}
