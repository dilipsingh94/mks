<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videos;


class VideosController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['showvideos','singlevideo']]);
    }
  

    public function newvideo()
    {
        $newvideo = Videos::all();
        return view('cms.embed-video',compact('newvideo',$newvideo));
    }

    public function videostore(Request $request){

        $this->validate($request,[
            'videotitle' => 'required',
            'uploadername'=> 'required',
            'embedlink'   => 'required',
            'description' => 'required'
        ]);

        $newvideo = new Videos();

        $newvideo->videotitle = $request->input('videotitle');
        $newvideo->uploadername = $request->input('uploadername');
        $newvideo->embedlink = $request->input('embedlink');
        $newvideo->description = $request->input('description');

        $newvideo -> save();

        return redirect()->route('videocms')->with('success','Video Embed Succesfully');

    }

    public function showvideos()
    {
        $newvideo = Videos::orderby('id', 'desc')->paginate(8);
        // dd($newvideo);
        return view('videopage.videos',compact('newvideo',$newvideo));
    }

// EDIT FUNCTIONALITY STARTS 
    public function videoedit($id){

        $newvideo = Videos::findOrFail($id);
        return view('videopage.edit-videos')->with('newvideo',$newvideo);

    }

    public function update(Request $request ,$id)
    {

        $newvideo =Videos::find($id);

        $newvideo->videotitle = $request->input('videotitle');
        $newvideo->uploadername = $request->input('uploadername');
        $newvideo->embedlink = $request->input('embedlink');
        $newvideo->description = $request->input('description');

        $newvideo -> save();
        // $validatedData = $request->validate([
        //     'videotitle' => 'required',
        //     'uploadername'=> 'required',
        //     'embedlink'   => 'required',
        //     'description' => 'required'
        // ]);
        // Videos::whereId($id)->update($validatedData);
        return redirect('/videodetails')->with('success','Video Updated Succesfully');

    }

    

    public function singlevideo($id)
    {
        $newvideo=Videos::find($id);
        return view('videopage.singlevideo',compact('newvideo',$newvideo));
    }


    public function destroy($id)
    {
        $newvideo = Videos::find($id);
        $newvideo->delete();
        return redirect()->route('videocms')->with('success','Video Deleted Succesfully');

    }
}
