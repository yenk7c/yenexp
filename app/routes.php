<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::pattern('id', '[0-9]+');
Route::get('/', 'PostsController@index');
/*
Route::get('/', function()
{
	$post = Posts::paginate(10);
	return View::make('posts.index')->with('post', $post);	;
});
*/
//Route::resource('posts', 'PostsController');
Route::get('/newpost','PostsController@create');

/*Route::get('/newpost', function()
{
return View::make('posts.create');
});
*/
Route::get('login', function()
{
    return View::make('users.index');
});
Route::get('catergory', function()
{
    return View::make('catergories.index');
});
Route::post('newpost', 'PostsController@store');

Route::get('posts/{id}', 'PostsController@show');
Route::get('delete/{id}','PostsController@destroy' );

Route::get('posts/edit/{id}', array('as' => 'posts.edit', function($id) 
	{
		// return our view and Nerd information
		$cat = array();
		$cat[0]= "Select catergory";
		foreach(Catergories::all() as $catergory){
			$cat[$catergory->id] =$catergory->name;
		}

		return View::make('posts.edit') // pulls app/views/nerd-edit.blade.php
			->with('post', Posts::find($id))
			->with('cat',$cat);
	}));
Route::DELETE('posts/{id}','PostsController@destroy');
Route::PUT('posts/edit/{id}','PostsController@update' );
Route::post('login', function()
{
        /* Get the login form data using the 'Input' class */
        $userdata = array(
            'name' => Input::get('name'),
            'password' => Input::get('password')
        );
 
        /* Try to authenticate the credentials */
        if(Auth::attempt($userdata)) 
        {
            // we are now logged in, go to admin
            return Redirect::to('admin');
        }
        else
        {
            return Redirect::to('login');
        }
});

//Route::resource('posts', 'PostsController@hello');

//catergory 

Route::get('/newcat', function()
{
return View::make('catergories.create');
});
Route::post('/newcat','CatergoriesController@store');
Route::get('/catergory','CatergoriesController@index');
Route::DELETE('cat/{id}','CatergoriesController@destroy');
Route::PUT('cat/edit/{id}','CatergoriesController@update');
Route::get('cat/edit/{id}',array('as' => 'cat.edit', function($id) 
	{
		// return our view and Nerd information
		return View::make('catergories.edit') // pulls app/views/nerd-edit.blade.php
			->with('cat', catergories::find($id));
	}));
