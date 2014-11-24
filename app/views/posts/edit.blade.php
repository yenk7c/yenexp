@include('posts.header')

<h1>Edit {{ $post->title }}</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::model($post, array('route' => array('posts.edit', $post->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('alias', 'Alias') }}
        {{ Form::text('alias', null, array('class' => 'form-control')) }}
    </div>

   <div class="form-group">
	{{ Form::label('caId', 'Catergory') }}
	{{Form::select('caId',$cat,$post->caId, array('class'=>'form-control chzn-select',
                'tabindex'=>'1',
                'data-placeholder'=>'Choose the appropriate category'))}}
            </div>
   </div>

    {{ Form::submit('Edit the Post!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
@include('posts.footer')