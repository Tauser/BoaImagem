<x-app-layout >
    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>PORTFOLIO</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('home')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>PORTFOLIO</span></div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projectSection02">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="secHeading" id="projectHeading">
                        <h3>Portfolio</h3>
                    </div>
                    <div class="projectCat_area">
                        <ul class="filterBTN_bare openHoverCursor">
                            @forelse ($categories as $category)
                                <li class="filterBTN"><a href="javascript:void(0);">{{$category->name}}</a></li>
                            @empty
                                <p>Nenhuma categoria encontrada !</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row shafull_container ">
                @forelse ($projects as $project)
                    <div class="col-md-6 col-lg-6 col-xl-4 shaf_item" >
                        <div class="project_item projectItemView" data-firstline="Mais" data-secondline="Detalhes" data-aos="fade-up" data-aos-duration="700" >
                            <div class="project_item_thumb">
                                <img src="{{$project->getThumbnail()}}" alt="{{$project->title}}">
                            </div>
                            <a href="{{route('projects.view', $project)}}" class="project_item_dtls">
                                <div class="projectInfoContent">
                                    <i class="boozy-down-arrow strokeText"></i><br>
                                    <h3 class="ps_item_name">{{$project->title}}</h3><br>
                                    <h5 class="ps_auth_name">{{ $project->project_category->name }}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                @empty
                    <p>Nenhum cliente encontrado !</p>
                @endforelse
                <div class="col-md-1 col-lg-1 col-xl-1 shaf_sizer"></div>
            </div>
            {{$projects->links()}}
        </div>

    </section>



</x-app-layout>
