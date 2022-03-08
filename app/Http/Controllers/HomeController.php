<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\PostView;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Show;
use App\Episode;
use App\EpisodeView;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $latestMovies = Movie::orderBy('release_year','desc')->paginate(10);
        $topMovies = Movie::orderBy('total_views','desc')->paginate(10);
        $shows = Show::paginate(5);
        return view('pages.index',compact('latestMovies','topMovies','shows'));
    }

    public function videopage($id)
    {
        $movie = Movie::find($id);
        $latestmovies = Movie::orderBy('total_views','desc')->where('id','!=',$id)->paginate(5); 
        $countdata = PostView::where('id_post',$movie->id)->where('user_id',Auth::user()->id)->first();
        $count = PostView::where('id_post',$movie->id)->get()->groupBy('user_id');
        if($countdata)
       {
        $countdata->count = $countdata->count + 1;
        $countdata->save();
        $movie->total_views = count($count);
        $movie->save();

        // return back();
        return view('pages.videopage',compact('movie','latestmovies'));
   
    }
     
       else{
        $countdata = new PostView();
        $countdata->id_post = $id;
        $countdata->url =  $id;
        $countdata->user_id = Auth::user()->id;
        $countdata->count = 1;
        $countdata->save();
        $movie->total_views = 1;
        $movie->save();
        // return back();
        return view('pages.videopage',compact('movie'));
   
     
    } 
} 

    public function showvideo($id){
        $show = Show::find($id);
        return view('pages.showvideo',compact('show'));
    }

    public function episodevideo($id){
        $episode = Episode::find($id);
        $show = Show::find($episode->show_id);
        $countdata = EpisodeView::where('url',$episode->id)->where('user_id',Auth::user()->id)->first();
        $count = EpisodeView::where('url',$episode->id)->get()->groupBy('user_id');
        $count_show = EpisodeView::where('id_show',$show->id)->get()->groupBy('user_id');
        if($countdata)
       {
        $countdata->count = $countdata->count + 1;
        $countdata->save();
        $episode->total_views = count($count);
        $episode->save();
        $show->total_views = count($count_show);
        $show->save();
        // return back();
        return view('pages.episodevideo',compact('episode'));
   
    }
       else{
        $countdata = new EpisodeView();
        $countdata->id_episode = $id;
        $countdata->id_show = $episode->show_id;
        $countdata->url =  $id;
        $countdata->user_id = Auth::user()->id;
        $countdata->count = 1;
        $countdata->save();
        $episode->total_views = 1;
        $episode->save();
        $show->total_views = 1;
        $show->save();
        // return back();
        return view('pages.episodevideo',compact('episode'));
    } 
        
    }

    public function movies(){
        $movies = Movie::all();
        return view('pages.movie',compact('movies'));
    }

    public function shows(){
        $shows = Show::all();
        return view('pages.show',compact('shows'));
    }
    
    public function setting(){

        return view('pages.setting');
    }
    public function setting_edit(){
        
        return view('pages.setting_edit');
    }

    public function setting_update(Request $request){
        $profile = Auth::User();
        $profile->name = $request->name;
        $profile->email = $request->email;
        if ($request->has('password')) {
            $profile->password = Hash::make($request->password);
        }
        $profile->dob = $request->dob;
        $profile->lang = $request->lang;
        $profile->save();
        return redirect('/setting');
    }

    public function search_result(Request $request){
        $movies = Movie::where('title','LIKE','%'.$request->search.'%')->orWhere('description','LIKE','%'.$request->search.'%')->get();
        $shows = Show::where('show_title','LIKE','%'.$request->search.'%')->orWhere('show_description','LIKE','%'.$request->search.'%')->get();
        
        return view('pages.search_result',compact('movies','shows'));
    }
}
