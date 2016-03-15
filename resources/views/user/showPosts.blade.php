<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Mes Articles</div>
                <div class="panel-body">
                    @foreach(Auth::user()->posts as $post)
                        <div class="panel-heading">
                            <a href="{{route('post.show', $post->id)}}">
                                <h4>{{ $post->title }}</h4>
                            </a>
                        </div>
                        <div class="panel-body">
                            {{ $post->content }}
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>