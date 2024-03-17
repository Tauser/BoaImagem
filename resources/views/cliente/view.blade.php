<x-app-layout>

    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>{{$customer->name}}</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('home')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>CLIENTE</span></div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caseStudyInfo">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="caseStudyInfoItem" data-aos="fade-down" data-aos-easing="linear">
                        <h3>Cliente</h3>
                        <p>{{$customer->name}}</p>
                    </div>
                </div>
{{--                <div class="col-md-6 col-lg-3 col-sm-6">--}}
{{--                    <div class="caseStudyInfoItem" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">--}}
{{--                        <h3>Tipo</h3>--}}
{{--                        <p>{{$customer->service->title}}</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="caseStudyInfoItem" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="650">
                        <h3>Desde</h3>
                        <p>{{$customer->getFormattedDateYear()}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="caseStudyInfoItem" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="750">
                        <h3>URL</h3>
                        <p>{{$customer->url}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="caseStudyInfoContetnsec">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="csStuInfoContent">
                        <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">Um pouco sobre nosso cliente</h2>
                        <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">{!!$customer->content!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caseStudyInfoThumbSec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="csStuInfoThumb animateThumb" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600" data-bs-popper="{{$customer->name}}">
                        <img src="{{$customer->getBanner()}}" alt="{{$customer->name}}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="caseStudyInfoContetnsec02">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="csStuInfoContent">
                        <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">resultados</h2>
                        <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">{!!$customer->results!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- BEGIN: Project Section  -->
    <section class="projectSection02">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="secHeading" id="projectHeading">
                        <h3>Projetos recentes</h3>
                    </div>
                </div>
            </div>
            <div class="row shafull_container ">
                @foreach($projects as $project)
                    <div class="col-md-6 col-lg-6 col-xl-4 shaf_item">
                        <div class="project_item projectItemView" data-firstline="Ver" data-secondline="Detalhes" data-aos="fade-up" data-aos-duration="1900" >
                            <div class="project_item_thumb">
                                <img src="{{$project->getThumbnail()}}" alt="project">
                            </div>
                            <a href="{{route('projects.view', [$project->project_category->slug ,$project->slug])}}" class="project_item_dtls">
                                <div class="projectInfoContent">
                                    <i class="boozy-down-arrow strokeText"></i><br>
                                    <h3 class="ps_item_name">{{ $project->title }}</h3><br>
                                    <h4 class="ps_auth_name">{{ $project->project_category->name }}</h4>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END: Project Section  -->

</x-app-layout>
