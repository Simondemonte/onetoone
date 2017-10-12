<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Post;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 public function create()
	 {
		 //
		 return view('post.create');
	 }
    public function index()
    {
        //
		//return view ('posts.index');
		//$posts = Post::all();
		//return view('posts.index', compact('posts'));
		$posts = Post::latest();
		return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return "I am the method that create stuff.";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
	 public function store(CreatePostRequest $request)
	 {
		 //this->validate($request, [
		 //	'title' => 'required'
		 // ]);
    public function store(Request $request)
    {
		$this->validate($request,[
			'title'=>'required',
			]);
        //
		//return $request->get('title');
		//return $request->title;
		//
		//Cara 1
		Post::create($request->all());
		
		//Cara 2
		//$post = new Post;
		//$Post->title = $request->title;
		//$Post->save();
		
		return redirect('/post');
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
		//return "This is the show method....yeayyyyy". $id;
		$post = Post::findOrFail($id);
		return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$post = Post::findOrFail($id);
		return view('posts/edit', compact('post'));
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
        //
		//return "IT's WORKING";
		//return $request->all();
		$post = Post::findOrFail($id);
		$post->update($request->all());
		return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		$post = Post:whereId($id)->delete();
		return redirect('/posts');
    }
	public function contact(){
		$people = ['Alex', 'Budi', 'Chandra', 'Dewi', 'Edwin'];
			return view('contact', compact('people'));
	}
	
	public function show_post($id,$name,$password){
		//return view('Post', compact('id'));
		return view('post',compact('id', 'name', 'password'));
	}

}

