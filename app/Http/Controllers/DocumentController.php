<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Document;
use Storage;

class DocumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth',['except' => ['docsshow']]);
    }

    //
    public function createdocs()
    {
        $newdocs = Document::All();
        return view('cms.upload-docs',compact('newdocs',$newdocs));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function docsstore(Request $request)
    {
        $this->validate($request,[
            'uploadername'=>'required',
            'documenttitle'=>'required',
            'documentfile'=>'required|mimes:pdf|max:5120'
        ]);
        
        $newdocs = new Document();
        
        $newdocs->uploadername = $request->input('uploadername');
        $newdocs->documenttitle = $request->input('documenttitle');

          if($request->hasfile('documentfile')){
            $file=$request->file('documentfile');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $newdocs->documentfile=$filename;
        }
        else{
            return $request;
            $newdocs->documentfile=' ';
          }

          $newdocs->save();

        return redirect()->route('docsdetails')->with('success','Document Uploaded Succesfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function docsshow()
    {
        $newdocs = Document::orderby('id', 'desc')->paginate(8);
        return view('documents.document-show',compact('newdocs',$newdocs));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editdocs($id)
    {
        $newdocs = Document::find($id);
        return view('documents.update-docs')->with('newdocs',$newdocs);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatedocs(Request $request, $id)
    {
        $this->validate($request,[
            'uploadername'=>'required',
            'documenttitle'=>'required',
        ]);

        // $validator = Validator::make($request->all(), [
        //     'documentfile' => 'max:500000',
        // ]);
        
        $newdocs = Document::find($id);
        // dd($newdocs);

        $newdocs->uploadername =$request->input('uploadername');
        $newdocs->documenttitle =$request->input('documenttitle');

        if($request->hasfile('documentfile')){
            $file=$request->file('documentfile');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $oldFilename=$newdocs->documentfile;

            $newdocs->documentfile=$filename;

            Storage::delete($oldFilename);
           
        }
        // else{
        //     return $request;
        //     $newdocs->documentfile=' ';
        // }
        $newdocs -> save();
        return redirect('/upload-documents')->with('success','Document Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function docsdestroy($id)
    {
        $newdocs = Document::find($id);
        $newdocs->delete();
        return redirect('/upload-documents')->with('success','Document Deleted Succesfully');
    }
}
