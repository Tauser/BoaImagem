<x-app-layout >

        <center class="container">
            <h1 class="clientes">As principais notícias sobre a nossa agência e de nossos parceiros.</h1>
            <form method="get" class="pesquisa"  action="{{route('post.search')}}">
                <input name="q" value="{{request()->get('q')}}" placeholder="pesquise a palavra-chave"/>
            </form>
        </center>

        <blogList class="container">
            <ul class="row blog">
            @foreach ($posts as $post)
                <x-post-item :post="$post">
                </x-post-item>
                @endforeach
            </ul>
            {{-- {{ $posts->links() }} --}}
            <div class="mt-5 mb-5">
                {{ $posts->links() }}
            </div>
        </blogList>


</x-app-layout>
