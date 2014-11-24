@include('posts.header')

<h1>Showing {{ $post->title }}</h1>

    <div class="jumbotron ">
        <h2>{{ $post->title }}</h2>
        <p>
            <strong>Alias:</strong> {{ $post->alias }}<br>
            <strong>Author:</strong> {{ $post->author }}<br>
            <strong>Crate at:</strong> {{ $post->crate_at }}<br>
            <strong>Tag:</strong> {{ $post->tag }}<br>
            <strong>Update at:</strong> {{ $post->update_at }}<br>
        </p>
    </div>

@include('posts.footer')