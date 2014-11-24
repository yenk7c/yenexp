<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	//$posts = Posts::paginate(1);
		$posts = Posts::all();
		$cat= Catergories::all(); 
		return View::make('posts.index')
			->with('post', $posts)
			->with('cat',$cat);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$cat = array();
		$cat[0]= "Select catergory";
		foreach(Catergories::all() as $catergory){
			$cat[$catergory->id] =$catergory->name;
		}
		return View::make('posts.create')->with('cat',$cat);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

	
			$post = new Posts;
			$post->title       = Input::get('title');
			$post->alias       = Input::get('alias');
			$post->author       = Input::get('author');
			$post->content       = Input::get('content');
			$post->caId       = Input::get('caId');
			//$nerd->tag       = Input::get('tag');
			$post->save();

			// redirect
			Session::flash('message', 'Successfully created post!');
			return Redirect::to('/');
		
	  
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
 public function show($id)
    {
        // get the posts
        $posts = Posts::find($id);

        // show the view and pass the nerd to it
        return View::make('posts.show')
            ->with('post', $posts);
    }


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	 
	public function edit($id)
	{
		// get the posts
        $post = Posts::find($id);
		$cat = array();
		$cat[0]= "Select catergory";
		foreach(Catergories::all() as $catergory){
			$cat[$catergory->id] =$catergory->name;
		}

        // show the edit form and pass the post
        return View::make('posts.edit')
            ->with('post',$post)
			->with('cat',$cat);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
        
            $post = Posts::find($id);
			$post->title       = Input::get('title');
			$post->alias       = Input::get('alias');
			$post->caId       = Input::get('caId');
            $post->save();
                 // redirect
            Session::flash('message', 'Successfully updated post!');
            return Redirect::to('/');
	}
	


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
	     // delete
        $posts = Posts::find($id);
        $posts->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the post!');
        return Redirect::to('/');
	}
	public function seachpost(){
		
	}

}
