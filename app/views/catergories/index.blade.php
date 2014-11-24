@include('posts.header')
@include('catergories.header')

@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            
        </tr>
    </thead>
    <tbody>
    @foreach($cat as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
           
            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                <!-- we will add this later since its a little more complicated than the other two buttons -->
			
			{{ Form::open(array('url' => 'cat/' . $value->id, 'class' => 'pull-right')) }}
					{{ Form::hidden('_method', 'DELETE') }}
					{{ Form::submit('Delete catergory', array('class' => 'btn btn-warning')) }}
				{{ Form::close() }}
			      
				
                <a class="btn btn-small btn-success" href="{{ URL::to('cat/' . $value->id) }}">Show catergory</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                <a class="btn btn-small btn-info" href="{{ URL::to('cat/edit/' . $value->id . '') }}">Edit catergory</a>

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

@include('posts.footer')