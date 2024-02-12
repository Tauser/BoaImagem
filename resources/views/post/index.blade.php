<x-app-layout >

        <center class="container">
            <h1 class="clientes">As principais notícias sobre a nossa agência e de nossos parceiros.</h1>
            <form method="get" class="pesquisa"  action="{{route('post.search')}}">
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

            <div class="mt-5 mb-5">
                {{ $posts->links() }}
            </div>
        </blogList> --}}
        <!-- BEGIN: Service Section  -->
        <section class="blogPageSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="blogGridView blGridNoSidebar">
                            <svg class="blgsvg_1">
                                <filter id='warp' x='0%' y='0%' width='100%' height='100%'>
                                    <feTurbulence type="fractalNoise" baseFrequency="0.01 0.04" numOctaves="1" result="warp" id="turbulence"></feTurbulence>
                                    <feOffset dx="0" dy="0" result="warpOffset"></feOffset>
                                    <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warpOffset"></feDisplacementMap>
                                </filter>
                            </svg>
                            <svg class="blgsvg_2">
                                <filter id='warp2' x='0%' y='0%' width='100%' height='100%'>
                                    <feTurbulence type="fractalNoise" baseFrequency="0.01 0.04" numOctaves="1" result="warp" id="turbulence2"></feTurbulence>
                                    <feOffset dx="0" dy="0" result="warpOffset"></feOffset>
                                    <feDisplacementMap xChannelSelector="R" yChannelSelector="G" scale="30" in="SourceGraphic" in2="warpOffset"></feDisplacementMap>
                                </filter>
                            </svg>
                            <div class="row">
                                {{-- BEGIN DATA --}}
                                @foreach ($posts as $post)
                                <div class="col-md-6">
                                    <div class="blogGridRow">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="blogImgThumbnail" data-aos="fade-up" data-aos-offset="300" data-aos-easing="" data-aos-duration="800">
                                                    <div class="animateThumb">
                                                        <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" >
                                                    </div>
                                                    <span class="blPostDate">
                                                        <span class="blPostDay strokeText">12</span>
                                                        <span class="blPostMonth">Jun <br> 2022</span>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="blogContent02">
                                                    <div class="blogMata no-cursor" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                                                        <span class="blogCcat ">
                                                            <a href="blog-grid-rsb.html">{{$post->category->name}}</a>
                                                        </span>
                                                        <span class="blogAuth">por&nbsp;<a href="javascript:void(0);">{{$post->user->name}}</a></span>
                                                    </div>
                                                    <h2 class="dfCursor" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="750"><a href="blog-details-lsb.html">{{$post->title}}</a></h2>
                                                    <p class="blogDesc" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="900"></p>
                                                    <div class="button-wrap right">
                                                        <a class="boozyLinkBTN" href="blog-details-rsb.html" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="950">
                                                            <div class="button-text sticky right btnWrapper_sm"><span>Ler artigo completo</span></div>
                                                            <div class="iconWrapper parallax-wrap iconWrapper_sm" style="transform: translate(0px, 0px);">
                                                                <div class="button-icon parallax-element" style="transform: translate(0px, 0px);">
                                                                    <i class="boozy-long-r-arrow"></i>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                {{-- END Data --}}

                            </div>
                        </div>

                        <div class="col-md-8">
                            <div class="boozyPagination blogGridPagination" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1200">
                                <nav class="navigation pagination" aria-label="Posts">
                                    <div class="nav-links">
                                        <a class="prev page-numbers" href="javascript:void(0);"><i class="fa-solid fa-chevron-left"></i></a>
                                        <a class="page-numbers" href="javascript:void(0);">1</a>
                                        <span aria-current="page" class="page-numbers current">2</span>
                                        <a class="next page-numbers" href="javascript:void(0);"><i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END: Service FAQ  -->


</x-app-layout>
