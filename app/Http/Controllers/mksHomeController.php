<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Storage;
use App\Auth;
use App\Blog;
use App\User;
use App\Videos;
use App\Document;


class mksHomeController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth',['except'=>['index', 'blogs', 'blogs_view', 'videos', 'videoView', 'Pressnotes', 'about_mks']]);
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Admin_Home() {
        $blog = Blog::all();
        $video = Videos::all();
        $pressnotes = Document::All();
        return view('home', compact('blog', 'video', 'pressnotes'));
    }

    public function index() {
        $blog = Blog::orderby('id', 'desc')->paginate(6);
        $video = Videos::orderby('id', 'desc')->paginate(3);
        $pressnote = Document::orderby('id', 'desc')->paginate(4);
        return view('mks-pages.home-page',compact('blog', 'video', 'pressnote'));
    }
    
    public function blogs() {
        $blog = Blog::orderby('id', 'desc')->paginate(8);
        // $user = User::where('id', Auth::id())->first();
        $user = User::all()->first();
        // return $user;
        return view('mks-pages.blog-page',compact('blog', 'user'));
    }

    public function blogs_view($id) {
        $blog = Blog::find($id);
        $blogpost = Blog::orderby('id', 'desc')->paginate(4);
        // return $blog;
        // $user = User::all()->first();
        // return view('mks-pages.blog-view-page')->with('blog',$blog);
        return view('mks-pages.blog-view-page', compact('blog', 'blogpost'));
    }

    public function videos() {
        $video = Videos::orderby('id', 'desc')->paginate(8);
        return view('mks-pages.video-page',compact('video',$video));
    }

    public function videoView($id) {
        $video=Videos::find($id);
        return view('mks-pages.video-view',compact('video',$video));
    }

    public function Pressnotes() {
        $pressnote = Document::orderby('id', 'desc')->paginate();
        return view('mks-pages.pressnote',compact('pressnote',$pressnote));
    }
    
    public function about_mks() {
        return view('mks-pages.about-page');
    }

    public function CreateNewPost() {
        return view('posts.create-post');
    }

    public function PostList() {
        $blog = Blog::all();
        return view('posts.blogpost',compact('blog',$blog));        
    }

    public function BlogPostStrore(Request $request) {
        $this->validate($request,[
            'category' => 'required',
            'writer' => 'required',
            'posttitle' => 'required',
            'blog' => 'required',
            'description' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,gif,png,svg|max:2048'
           
        ]);
        $blog = new Blog();
        $blog->category =$request->input('category');
        $blog->writer =$request->input('writer');
        $blog->posttitle =$request->input('posttitle');
        $blog->blog =$request->input('blog');
        $blog->description =$request->input('description');

        if($request->hasfile('thumbnail')){
            $file=$request->file('thumbnail');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $blog->thumbnail=$filename;
        }
        else{
            return $request;
            $blog->thumbnail=' ';
          }

          $blog->save();
          return redirect()->route('post.list')->with('success','Blogpost Created Succesfully');
    }

    public function EditBlogPost($id) {
        $blog = Blog::find($id);
        return view('posts.edit-blogpost')->with('blog',$blog);
    }

    public function UpdateBlogPost(Request $request ,$id) {
        $this->validate($request,[
            'category' => 'required',
            'writer' => 'required',
            'posttitle' => 'required',
            'blog' => 'required',
            'description' => 'required',
            'thumbnail' => 'image'
        ]);
        
        $blog = Blog::find($id);

        $blog->category =$request->input('category');
        $blog->writer =$request->input('writer');
        $blog->posttitle =$request->input('posttitle');
        $blog->blog =$request->input('blog');
        $blog->description =$request->input('description');

        if($request->hasfile('thumbnail')){
            $file=$request->file('thumbnail');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file->move('uploads/',$filename);
            $oldFilename=$blog->thumbnail;
            $blog->thumbnail=$filename;
            Storage::delete($oldFilename);
        }
        $blog->save();
        return redirect('/blogpost/list')->with('success','Blogpost Updated Succesfully');
    }

    public function DeleteBlogPost($id) {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->route('post.list')->with('success','Blogpost Deleted Succesfully');
    }
    

    public function VideosList() {
        $video = Videos::all();
        return view('videos.videosList',compact('video',$video));
    }

    public function VideosAdd() {
        return view('videos.post-new-video');
    }

    public function NewVideoStore(Request $request) {
        $this->validate($request,[
            'videotitle' => 'required',
            'uploadername'=> 'required',
            'embedlink'   => 'required',
            'description' => 'required'
        ]);
        $video = new Videos();
        $video->videotitle = $request->input('videotitle');
        $video->uploadername = $request->input('uploadername');
        $video->embedlink = $request->input('embedlink');
        $video->description = $request->input('description');
        $video -> save();
        return redirect()->route('videos.list')->with('success','Video Added Succesfully');

    }

    public function EditVideo($id){
        $video = Videos::findOrFail($id);
        return view('videos.edit-video')->with('video',$video);
    }

    public function UpdateVideo(Request $request ,$id) {
        $video =Videos::find($id);
        $video->videotitle = $request->input('videotitle');
        $video->uploadername = $request->input('uploadername');
        $video->embedlink = $request->input('embedlink');
        $video->description = $request->input('description');
        $video -> save();
        return redirect()->route('videos.list')->with('success','Video Updated Succesfully');

    }

    public function DeleteVideo($id) {
        $video = Videos::find($id);
        $video->delete();
        return redirect()->route('videos.list')->with('success','Video Deleted Succesfully');
    }


    public function PressnotesList() {
        $pressnotes = Document::All();
        return view('documents.pressnotes',compact('pressnotes',$pressnotes));
    }

    public function PressnotesUpload() {
        return view('documents.upload-pressnotes');
    }

    public function PressnoteStore(Request $request)
    {
        $this->validate($request,[
            'uploadername'=>'required',
            'documenttitle'=>'required',
            'documentfile'=>'required|mimes:pdf|max:30720'
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

        return redirect()->route('pressnote.list')->with('success','Document Uploaded Succesfully');
    }

    public function PressnoteEdit($id) {
        $docs = Document::find($id);
        return view('documents.edit-pressnotes')->with('docs',$docs);
    }

    public function PressnoteUpdate(Request $request, $id) {
        $this->validate($request,[
            'uploadername'=>'required',
            'documenttitle'=>'required',
            'documentfile'=>'required|mimes:pdf|max:5120'

        ]);

        $newdocs = Document::find($id);

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
        else {
            return $request;
            $newdocs->documentfile=' ';
        }
        $newdocs -> save();
        return redirect()->route('pressnote.list')->with('success','Document Updated Succesfully');
    }

    public function PressnoteDelete($id) {
        $newdocs = Document::find($id);
        $newdocs->delete();
        return redirect()->route('pressnote.list')->with('success','Document Deleted Succesfully');
    }






}
