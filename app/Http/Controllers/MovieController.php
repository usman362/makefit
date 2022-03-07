<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Movie;
use App\Category;
use App\MovieBanner;
use App\ShowBanner;
use App\PostView;
class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('backend.pages.Movie.index',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.Movie.add-movie',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $movies = new Movie();
        $movies->title = $request->title;
        $movies->category = $request->category;
        $movies->quality = $request->quality;
        $movies->description = $request->description;
        $movies->release_year = $request->release_year;
        $movies->language = $request->language;
        $movies->duration = $request->duration;
        $movies->age_restriction = $request->age_restriction;
        $MovieImage = time().".".request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/Movies'),$MovieImage);
        $movies->image = $MovieImage;
        $MovieVideo = time().".".request()->video->getClientOriginalExtension();
        request()->video->move(public_path('videos/Movies'),$MovieVideo);
        $movies->video = $MovieVideo;
        if ($request->trailer == null) {
            
        } else {
            $Movietrailer = time().".".request()->trailer->getClientOriginalExtension();
            request()->trailer->move(public_path('trailers/Movies'),$Movietrailer);
            $movies->trailer = $Movietrailer;
        }
        $movies->save();
        return redirect('/movie');
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
        $movie = Movie::find($id);
        $categories = Category::all();
        return view('backend.pages.Movie.edit',compact('movie','categories'));
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
        $movies = Movie::find($id);
        $movies->title = $request->title;
        $movies->category = $request->category;
        $movies->quality = $request->quality;
        $movies->description = $request->description;
        $movies->release_year = $request->release_year;
        $movies->language = $request->language;
        $movies->duration = $request->duration;
        $movies->age_restriction = $request->age_restriction;
        if ($request->image == null) {
            
        } else {
            $MovieImage = time().".".request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images/Movies'),$MovieImage);
        $movies->image = $MovieImage;
        }
        if ($request->video == null) {
            
        } else {
            $MovieVideo = time().".".request()->video->getClientOriginalExtension();
            request()->video->move(public_path('videos/Movies'),$MovieVideo);
            $movies->video = $MovieVideo;
        }

        if ($request->trailer == null) {
            
        } else {
            $Movietrailer = time().".".request()->trailer->getClientOriginalExtension();
            request()->trailer->move(public_path('trailers/Movies'),$Movietrailer);
            $movies->trailer = $Movietrailer;
        }
        $movies->save();
        return redirect('/movie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return redirect('/movie');
    }


    public function moviebanner(){
        return view('backend.pages.Banner.index');
    }

    public function bannercreate(){
        return view('backend.pages.Banner.add-banner');
    }

    public function editmbanner($id){
        $mbanner = MovieBanner::find($id);
        return view('backend.pages.Banner.edit',compact('mbanner'));
    }

    

    public function moviebannerstr(Request $request){
        $movieban = new MovieBanner();
        $movieban->banner_name = $request->banner_name;
        $movieban->movie_id = $request->movie_id;
        $movieban->save();
        return redirect('/moviebanner');
    }
    public function moviebannerupd(Request $request,$id){
        $movieban = MovieBanner::find($id);
        $movieban->banner_name = $request->banner_name;
        $movieban->movie_id = $request->movie_id;
        $movieban->save();
        return redirect('/moviebanner');
    }


}
