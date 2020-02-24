<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
// use App\Auth;
use DB;
use Storage;

class BlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['blogshow']]);
    }
  
    public function cms()
    {
        $newblog = Blog::all();
        return view('cms.write-blog',compact('newblog',$newblog));
    }

    public function blogstore(Request $request)
    {
        $this->validate($request,[
            'category' => 'required',
            'writer' => 'required',
            'posttitle' => 'required',
            'blog' => 'required',
            'link' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048'
           
        ]);
        $newblog = new Blog();
        $newblog->category =$request->input('category');
        $newblog->writer =$request->input('writer');
        $newblog->posttitle =$request->input('posttitle');
        $newblog->blog =$request->input('blog');
        $newblog->link =$request->input('link');

        if($request->hasfile('thumbnail')){
            $file=$request->file('thumbnail');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $newblog->thumbnail=$filename;
        }
        else{
            return $request;
            $newblog->thumbnail=' ';
          }

          $newblog->save();
          return redirect()->route('writeblog')->with('success','Blog Saved Succesfully');
    }

    public function blogshow(){
        $newblog = Blog::orderby('id', 'desc')->paginate(8);
        return view('blogs.blog',compact($newblog,'newblog'));
    }
    
    public function edit($id)
    {
        $newblog = Blog::find($id);
        return view('blogs.update')->with('newblog',$newblog);
    }

    
    public function update(Request $request ,$id)
    {

        $this->validate($request,[
            'category' => 'required',
            'writer' => 'required',
            'posttitle' => 'required',
            'blog' => 'required',
            'link' => 'required',
            'thumbnail' => 'image'
           
        ]);
        
        $newblog = Blog::find($id);
        // dd($newblog);

        $newblog->category =$request->input('category');
        $newblog->writer =$request->input('writer');
        $newblog->posttitle =$request->input('posttitle');
        $newblog->blog =$request->input('blog');
        $newblog->link =$request->input('link');

        // $request->validate([
        //     'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048'
        // ]);

        if($request->hasfile('thumbnail')){
            $file=$request->file('thumbnail');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);

            $oldFilename=$newblog->thumbnail;

            $newblog->thumbnail=$filename;

            Storage::delete($oldFilename);
        }
        // else{
        //     return $request;
        //     $newblog->thumbnail=' ';
        // }

        $newblog->save();
        return redirect('/contentupload')->with('success','Blog Updated Succesfully');
    }

    public function blogdestroy($id)
    {
        $newblog = Blog::find($id);
        $newblog->delete();
        return redirect('/contentupload')->with('success','Blog Deleted Succesfully');
    
    }
}
