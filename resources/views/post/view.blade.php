<x-app-layout>
    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>Blog</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('sobre')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>SOBRE</span></div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blogDetailsPgSec">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="blogDetails blDetailsNoSidebar">

                        <div class="singleImgThumb" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800">
                            <div >
                                <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" >
                            </div>
                            <span class="blPostDate">
                                <span class="blPostDay strokeText">{{$post->getFormattedDateDay()}}</span>
                                <span class="blPostMonth">{{$post->getFormattedDateMonth()}} <br> {{$post->getFormattedDateYear()}}</span>
                            </span>
                        </div>
                        <div class="postMeta" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="900">
                            <div class="post_cat">
                                <a href="#">{{$post->category->name}}</a>
                            </div>
                            <div class="postAuthor">
                                por&nbsp;<a href="javascript:void(0);">{{$post->user->name}}</a>
                            </div>
                        </div>
                        <div class="post_title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                            <h2><a href="javascript:void(0);">{{$post->title}}</a></h2>
                        </div>
                        <div class="postContent">
                            <p  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">{!!$post->content!!}</p>

                            <div class="postNavigationRow"  data-aos="fade-up" data-aos-easing="linear" data-aos-duration="700">
                                <div class="row">
                                    @if (isset($prev))
                                    <div class="col-md-6 bzCursroHv">
                                        <a href="{{route('post.view', $prev)}}" class="postNavigationItem">
                                            <i class="fa-solid fa-chevron-left"></i>
                                            <img src="{{$prev->getThumbnail()}}" alt="postNavImage">
                                            <div class="postNavTitleDate">
                                                <h3>{{$prev->title}}</h3>
                                                <span class="blPDate"><i class="fa-regular fa-calendar-days"></i> {{$post->getFormattedDate()}}</span>
                                            </div>
                                        </a>
                                    </div>
                                    @endif
                                    @if (isset($next))
                                    <div class="col-md-6 bzCursroHv">
                                        <a href="{{route('post.view', $next)}}" class="postNavigationItem postNavNextItem">
                                            <div class="postNavTitleDate">
                                                <h3>{{$next->title}}</h3>
                                                <span class="blPDate"><i class="fa-regular fa-calendar-days"></i>{{$post->getFormattedDate()}}</span>
                                            </div>
                                            <img src="{{$next->getThumbnail()}}" alt="postNavImage">
                                            <i class="fa-solid fa-chevron-right"></i>
                                        </a>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
