@extends("layouts.app")

@section('styles')
    <link href="{{ mix("css/pages/posts/show.css") }}" rel="stylesheet">
@endsection

@section('content')

    <div class="post-container">

        <h3 class="title">{{ $post->title }}</h3>

        <div class="meta">
            <div class="author">
                <img class="avatar" src="{{ $post->author->avatar }}">
                <div class="nickname">{{ $post->author->nickname }}</div>
            </div>
        </div>

        <div class="content">
            {!! $post->content !!}
        </div>

    </div>

@endsection

