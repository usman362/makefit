<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Episode;
use App\Show;
class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $episodes = Episode::all();
        foreach($episodes as $epi);
        $shows = Show::where('id',$epi->show_id)->get();
        return view('backend.pages.Episode.index',compact('episodes','shows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $shows = Show::all();
        return view('backend.pages.Episode.add-episode',compact('shows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $episodes = new Episode();
        $episodes->show_id = $request->show_id;
        $episodes->season = $request->season;
        $episodes->ep_no = $request->ep_no;
        $episodes->ep_name = $request->ep_name;
        $episodeImage = time().'.'.request()->ep_image->getClientOriginalExtension();
        request()->ep_image->move(public_path('images/Episode'), $episodeImage);
        $episodes->ep_image = $episodeImage;
        $episodes->r_time_minute = $request->r_time_minute;
        $episodes->date = $request->date;
        $episodes->description = $request->description;
        $episodeVideo = time().'.'.request()->video->getClientOriginalExtension();
        request()->video->move(public_path('videos/Episode'), $episodeVideo);
        $episodes->video = $episodeVideo;
        $episodes->save();
        return redirect('/episode');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $episode = Episode::find($id);
        $shows = Show::all();
        return view('backend.pages.Episode.edit',compact('shows','episode'));
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
        $episodes = Episode::find($id);
        $episodes->show_id = $request->show_id;
        $episodes->season = $request->season;
        $episodes->ep_no = $request->ep_no;
        $episodes->ep_name = $request->ep_name;
        if ($request->ep_image == null) {
            
        } else {
            $episodeImage = time().'.'.request()->ep_image->getClientOriginalExtension();
            request()->ep_image->move(public_path('images/Episode'), $episodeImage);
            $episodes->ep_image = $episodeImage;
        }
        $episodes->r_time_minute = $request->r_time_minute;
        $episodes->date = $request->date;
        $episodes->description = $request->description;
        if ($request->video == null) {
            
        } else {
        $episodeVideo = time().'.'.request()->video->getClientOriginalExtension();
        request()->video->move(public_path('videos/Episode'), $episodeVideo);
        $episodes->video = $episodeVideo;
        }
        $episodes->save();
        return redirect('/episode');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $episode = Episode::find($id);
        $episode->delete();
        return redirect('/episode');
    }
}
