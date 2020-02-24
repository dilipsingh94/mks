<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presentation;
use DB;
use Storage;

class PresentationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except'=>['showppt']]);
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function docsindex()
    {
        $newppt = Presentation::all();
        return view('cms.upload-ppt',compact('newppt',$newppt));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeppt(Request $request)
    {
        $this->validate($request,[
 
            'name' =>  'required',
            'titlelink'    =>  'required',
            'title'        =>  'required',
            'documentlink' =>  'required',
            'presentation' =>  'required|mimes:pptx,ppt'
        ]);

        $newppt = new Presentation();
        
        $newppt->name = $request->input('name');
        $newppt->titlelink = $request->input('titlelink');
        $newppt->title = $request->input('title');
        $newppt->documentlink = $request->input('documentlink');

        if($request->hasfile('presentation')){
            $file=$request->file('presentation');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $newppt->presentation=$filename;
        }
        else{
            return $request;
            $newppt->presentation=' ';
          }


        $newppt->save();

        return redirect()->route('pptdetails')->with('success','Presentation Uploaded Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showppt()
    {
        $newppt = Presentation::orderby('id', 'desc')->paginate(8);
        return view('presentations.show-ppt',compact('newppt',$newppt));
    }

    public function downloadppt(){

        $newppt = DB::table('presentations')->get();
        return view('presentations.show-ppt',compact('newppt',$newppt));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editppt($id)
    {
        $newppt = Presentation::find($id);
        return view('presentations.update-ppt')->with('newppt',$newppt);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateppt(Request $request, $id)
    {
        $newppt = Presentation::find($id);
        // dd($newppt);
        $newppt->name = $request->input('name');
        $newppt->titlelink = $request->input('titlelink');
        $newppt->title = $request->input('title');
        $newppt->documentlink = $request->input('documentlink');

        if($request->hasfile('presentation')){
            $file=$request->file('presentation');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $oldFilename=$newppt->presentation;

            $newppt->presentation=$filename;

            Storage::delete($oldFilename);
           
        }
        // else{
        //     return $request;
        //     $newppt->presentation=' ';
        // }
        $newppt->save();    
        return redirect('/upload-presentations')->with('success','Presentation Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pptdestroy($id)
    {
        $newppt = Presentation::find($id);
        $newppt->delete();
        return redirect('/upload-presentations')->with('success','Presentation Deleted Succesfully');
    }
}
