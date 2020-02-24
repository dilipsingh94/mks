<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Audio;

class AudioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['audioshow']]);
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function audioindex()
    {
        $newaudio = Audio::all();
        return view('cms.upload-audio',compact('newaudio',$newaudio));
    }

    public function audiostore(Request $request)
    {
        $this->validate($request,[
            'audiotitle'=>'required',
            'uploadername'=>'required',
            'embedlink'=>'required'
        ]);

        $newaudio = new Audio();
        $newaudio->audiotitle =$request->input('audiotitle');
        $newaudio->uploadername=$request->input('uploadername');
        $newaudio->embedlink=$request->input('embedlink'); 

        $newaudio->save();
        return redirect()->route('uploadaudio')->with('success','Audio Saved Succesfully');

    }

    
    public function audioshow()
    {
        $newaudio = Audio::orderby('id','desc')->paginate(8);
        return view('audiopages.audio',compact($newaudio,'newaudio'));
    }

    public function singleaudio($id)
    {
        $newaudio=Audio::find($id);
        return view('audiopages.single-audio',compact('newaudio',$newaudio));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editaudio($id)
    {
        $newaudio = Audio::findOrFail($id);
        return view('audiopages.edit-audio')->with('newaudio',$newaudio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateaudio(Request $request, $id)
    {
    
        $newaudio = Audio::find($id);
        $newaudio->audiotitle =$request->input('audiotitle');
        $newaudio->uploadername=$request->input('uploadername');
        $newaudio->embedlink=$request->input('embedlink'); 

        $newaudio->save();
        // $validatedData = $request->validate([
        //     'audiotitle' => 'required',
        //     'uploadername'=> 'required',
        //     'embedlink'   => 'required'
        // ]);
        // Audio::whereId($id)->update($validatedData);
        return redirect()->route('uploadaudio')->with('success','Audio Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyaudio($id)
    {
        $newaudio = Audio::find($id);
        $newaudio->delete();
        return redirect('/audio')->with('success','Audio Deleted Succesfully');
    }
}
