<li class="col-4 mb-5">
    <div class="parent">
        <figure>
            <a href="{{route('post.view', $post)}}" class="hover:opacity-75">
                <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" >
            </a>
        </figure>
    </div>
    <h5>
        <a href="{{route('post.view', $post)}}" >
            {{$post->title}}
        </a>
    </h5>

    <a href="{{route('post.view', $post)}}" class="pb-6"><button href="{{route('post.view', $post)}}"  class="readmore">Continue lendo</button></a>
</li>
