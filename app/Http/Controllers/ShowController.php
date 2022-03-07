<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Show;
use App\ShowBanner;
class ShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shows = Show::all();
        return view('backend.pages.Show.index',compact('shows'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.Show.add-show',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $show = new Show();
        $show->show_title = $request->show_title;
        $show->show_language = $request->show_language;
        $show->show_category = $request->show_category;
        $ShowImage = time().'.'.request()->show_image->getClientOriginalExtension();
        request()->show_image->move(public_path('images/Show'),$ShowImage);
        $show->show_image = $ShowImage;
        $ShowBanner = time().".".request()->show_banner->getClientOriginalExtension();
        request()->show_banner->move(public_path('images/Banner'),$ShowBanner);
        $show->show_banner  = $ShowBanner;
        $episodeVideo = time().'.'.request()->video->getClientOriginalExtension();
        request()->video->move(public_path('videos/Show'), $episodeVideo);
        $show->video = $episodeVideo;
        $show->show_description = $request->show_description;
        $show->show_quality = $request->show_quality;
        $show->save();
        return redirect('/show');
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
        $show = Show::find($id);
        $categories = Category::all();
        return view('backend.pages.Show.edit',compact('show','categories'));
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
        $show = Show::find($id);
        $show->show_title = $request->show_title;
        $show->show_language = $request->show_language;
        $show->show_category = $request->show_category;
        if ($request->show_image == null) {
            
        }else{
            $ShowImage = time().'.'.request()->show_image->getClientOriginalExtension();
            request()->show_image->move(public_path('images/Show'),$ShowImage);
            $show->show_image = $ShowImage;   
        }
        if ($request->show_banner == null) {
            
        }else{
        $ShowBanner = time().".".request()->show_banner->getClientOriginalExtension();
        request()->show_banner->move(public_path('images/Banner'),$ShowBanner);
        $show->show_banner  = $ShowBanner;
    }
    if ($request->video == null) {
            
    }else{
    $episodeVideo = time().'.'.request()->video->getClientOriginalExtension();
        request()->video->move(public_path('videos/Show'), $episodeVideo);
        $show->video = $episodeVideo;
    }

        $show->show_description = $request->show_description;
        $show->show_quality = $request->show_quality;
        $show->save();
        return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $show = Show::find($id);
        $show->delete();
        return redirect('/show');
    }
    public function editsbanner($id){
        $sbanner = ShowBanner::find($id);
        return view('backend.pages.Banner.editshow',compact('sbanner'));
    }
    public function showbanner(){
        return view('backend.pages.Banner.showbanner');
    }


    public function showbannercreate(){
        return view('backend.pages.Banner.add-showbanner');
    }

    public function showbannerstr(Request $request){
        $movieban = new ShowBanner();
        $movieban->banner_name = $request->banner_name;
        $movieban->show_id = $request->show_id;
        $movieban->save();
        return redirect('showbanner');
    }
    public function showbannerupd(Request $request,$id){
        $movieban = ShowBanner::find($id);
        $movieban->banner_name = $request->banner_name;
        $movieban->show_id = $request->show_id;
        $movieban->save();
        return redirect('showbanner');
    }
}
