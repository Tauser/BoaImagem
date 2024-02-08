<x-app-layout>


        <center class="container">
            <h1 class="clientes">As principais notícias sobre a nossa agência e de nossos parceiros.</h1>
            <form method="get" class="pesquisa" action="{{route('post.search')}}">
                <input name="q" value="{{request()->get('q')}}" placeholder="pesquise a palavra-chave"/>
            </form>
        </center>

        {{-- <blogList class="container">
            <ul class="row blog">
            @foreach ($posts as $post)
                <x-post-item :post="$post">
                </x-post-item>
            @endforeach
            </ul>
            <div class="align-items-center">
            </div>

            {{ $posts->links() }}
        </blogList> --}}

        <section class="container w-full md:w-2/3  px-3">
            <div class=" flex flex-col">
                @foreach($posts as $post)
                    <div>
                        <a href="{{route('post.view', $post)}}">
                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" >
                            <h2 class="text-blue-500 font-bold text-lg sm:text-xl mb-2">
                                {!! str_replace(request()->get('q'), '<span class="bg-yellow-300">'.request()->get('q').'</span>', $post->title) !!}
                            </h2>
                        </a>
                        <div>
                            {{$post->shortBody()}}
                        </div>
                    </div>
                    <hr class="my-4">
                @endforeach
            </div>
            {{-- {{ $posts->links() }} --}}
        </section>
        <!-- Sidebar Section -->


    </section>


</x-app-layout>
