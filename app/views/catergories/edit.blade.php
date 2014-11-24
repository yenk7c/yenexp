@include('posts.header')
@include('catergories.header')
<h1>Edit {{ $cat->name }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($cat, array('route' => array('cat.edit', $cat->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>



   

    {{ Form::submit('Edit the catergory!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@include('posts.footer')