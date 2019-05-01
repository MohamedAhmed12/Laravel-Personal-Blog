<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostsController extends Controller
{
 /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except' => ['index', 'show']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post = Post::all();
        //$post = DB::select('SELECT * FROM posts'); another way to post all
        $posts = post::orderBy('created_at','desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[ // validate($request storing function can be used in PostsController@store, array of rules)
            'title'         => 'required',
            'body'          => 'required',
            'cover_image'  => 'image|nullable|max:1999' //nullable means its optional and max is for max. storage
        ]);
        
        //Handle File Upload
        if($request-> hasFile('cover_image')){
            //Get File With Extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get Filename without extension 
            $filename = Pathinfo($filenameWithExt, PATHINFO_FILENAME);// Pathinfo extract name without extension
            //Gte the extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename To Store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            //Upload The Image to the public/storage/cover_images folder which is linked to storage folder of the app
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);
        }else{
            $filenameToStore = 'noimage.png';
        }
        
        //Create a post
        
        $post = new Post;
        $post->title          = $request->input('title');
        $post->body           = $request->input('body');
        $post->user_id        = auth()->user()->id;
        $post->cover_image    = $filenameToStore;
        $post->save();
        
        //get back to posts page and popup message that its was successful posting
        return redirect('/posts')->with(['success'=> 'Post ccreated', 'post', $post]);
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$post = Post::where('title', 'Post Two')->get();  another way to get single post
        $post = Post::find($id); //Post here is our model
        return view('posts.show')->with('post',$post);//file show to load the view of each single post
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        
        //check if the correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        
        return view ('posts.edit')->with('post', $post);
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
        $this->validate($request,[
            'title' => 'required',
            'body'  => 'required',
            'cover_image'  => 'image|nullable|max:1999' //nullable means its optional and max storage
        ]);
        
         //Handle File Upload
        if($request-> hasFile('cover_image')){
            //Get File With Extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get Filename without extension 
            $filename = Pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Gte the extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //Filename To Store
            $filenameToStore = $filename.'_'.time().'.'.$extension;
            //Upload The Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $filenameToStore);
        }
        //Create a post
        
        $post=Post::find($id);
        $post->title = $request->input('title');
        $post->body  = $request->input('body');
        if($request-> hasFile('cover_image')){
            $post->cover_image    = $filenameToStore;
        }
        $post->save();
        
        return redirect('/posts')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Post::find($id);
        
        //check if the correct user
        if(auth()->user()->id !== $post->user_id){
            return redirect('/posts')->with('error', 'Unauthorized Page');
        }
        
        $post->delete();
        return redirect('/posts')->with('success', 'Post Removed');
    }
}
