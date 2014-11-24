@include('posts.header')
@include('catergories.header')
<h1>Create catergory</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'newcat')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

  

    {{ Form::submit('Create catergory', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@include('posts.footer')