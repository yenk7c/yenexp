@include('posts.header')


<h1>All the Posts</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Alias</td>
            <td>Author</td>
            <td>Content</td>
            <td>Create at</td>
            <td>Update at</td>
            <td>Catergory</td>
        </tr>
    </thead>
    <tbody>
    @foreach($post as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->title }}</td>
            <td>{{ $value->alias }}</td>
            <td>{{ $value->author }}</td>
            <td>{{ $value->content }}</td>
            <td>{{ $value->crate_at }}</td>
            <td>{{ $value->update_at }}</td>
			 <td>
			
			 @foreach($cat as $k =>  $c)
				@if($c->id == $value->caId)
					{{ $c->name}}
				@endif
			@endforeach
          </td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
			
			{{ Form::open(array('url' => 'posts/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
			      
				  <a class="btn btn-small btn-warning" href="{{ URL::to('delete/' . $value->id) }}">Delete this Posts</a>
                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $value->id) }}">Show this Posts</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('posts/edit/' . $value->id . '') }}">Edit this Posts</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>


</body>
</html>


