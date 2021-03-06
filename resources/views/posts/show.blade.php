@extends("layouts.app", ['pageTitle' => $post->title])

@section('styles')
    <link href="{{ mix("/css/pages/posts/show.css") }}" rel="stylesheet">
@endsection

@section('content')

    <div class="post-container">

        <div class="cover" style="background-image: url({{ $post->cover }});"></div>

        <h3 class="title font-en-serif-zh-sans-serif">{{ $post->title }}</h3>

        <div class="author">
            <img class="avatar" src="{{ $post->author->avatar }}">
            <div class="detail">
                <div class="nickname">{{ $post->author->nickname }}</div>
                <div class="published-at">{{ $post->author->updated_at }}</div>
            </div>
        </div>

        <div class="content font-en-serif-zh-sans-serif">
            {!! $post->content !!}
        </div>

    </div>

@endsection

