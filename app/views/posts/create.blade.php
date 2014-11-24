@include('posts.header')
<h1>Create a Nerd</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'newpost')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('alias', 'Alias') }}
        {{ Form::text('alias', Input::old('alias'), array('class' => 'form-control')) }}
    </div>

	  <div class="form-group">
        {{ Form::label('author', 'Author') }}
        {{ Form::text('author', Input::old('author'), array('class' => 'form-control')) }}
    </div>
	  <div class="form-group">
        {{ Form::label('content', 'Content') }}
        {{ Form::text('content', Input::old('content'), array('class' => 'form-control')) }}
    </div>
	<div>
		{{ Form::label('caId', 'Catergory') }}
        {{Form::select('caId', $cat, null, array('class'=>'form-control chzn-select',
                'tabindex'=>'1',
                'data-placeholder'=>'Choose the appropriate category'))}}
            </div>
    {{ Form::submit('Create the Posts!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@include('posts.footer')