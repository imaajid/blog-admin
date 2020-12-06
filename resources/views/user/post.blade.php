@extends('user/app')


@section('bg-img',Storage::disk('local')->url($post->image))

@section('head')
    <link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection


@section('tittle', $post->tittle)
@section('subheading', $post->tittle)
@section('main-content')

    <!-- Post Content -->


    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
            src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=363246965082387&autoLogAppEvents=1"
            nonce="43T69sDs"></script>
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <small>Created at {{ $post->created_at->diffForHumans() }}</small>
                    @foreach ($post->categories as $category)
                        <a href=""><small class="pull-right" style="margin-right: 20px;">

                    {{@$category->name}}

                    </small></a>
                    @endforeach
                    {!! htmlspecialchars_decode($post->body)!!}

                    {{-- Tag clouds --}}
                    <h3>Tag Clouds</h3>
                    @foreach ($post->tags as $tag)
                        <a href=""><small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
                          {{ $tag->name }}
                            </small></a>
                    @endforeach
                    </div>

                <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5" data-width=""></div>
            </div>
        </div>
    </article>

    <hr>

@endsection
@section('footer')
    <script src="{{ asset('user/js/prism.js') }}"></script>
@endsection
