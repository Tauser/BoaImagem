<x-app-layout>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <div class="flex container post">
        <!-- Post Section -->
        <section>
            <article >
                <div >

                    <h1 class="text-3xl font-bold hover:text-gray-700 pb-4">
                        {{$post->title}}
                    </h1>
                    <p class="hover:opacity-75 image">
                        <img src="{{$post->getThumbnail()}}">
                    </p>
                    <div >
                            <a href="#" class="text-sm font-bold uppercase pb-4">
                                {{$post->category->name}}
                            </a>
                    </div>
                    <p class="text-sm pb-8 publicaaco">
                        Por <b>{{$post->user->name}}</b>, Publicado em
                         | {{ $post->human_read_time }}
                    </p>

                    <contentPost>
                        {!! $post->content !!}
                    </contentPost>
                </div>
            </article>

    </div>
    <center>
        <div class="container row navFooter items-center">
            <div class="col">
                @if($prev)
                    <a href="{{route('post.view', $prev)}}"
                       class="block w-full bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center">
                            <i class="fas fa-arrow-left pr-1"></i>
                            Anterior
                        </p>
                        <p class="pt-2">{{\Illuminate\Support\Str::words($prev->title, 5)}}</p>
                    </a>
                @endif
            </div>
            <div class="col">
                @if($next)
                    <a href="{{route('post.view', $next)}}"
                       class="block w-full bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center justify-end">
                            Proximo
                            <i class="fas fa-arrow-right pl-1"></i>
                        </p>
                        <p class="pt-2">
                            {{\Illuminate\Support\Str::words($next->title, 5)}}
                        </p>
                    </a>
                @endif
            </div>
        </div>
    </center>

</x-app-layout>
