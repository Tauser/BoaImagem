<x-app-layout>

    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>{{$project->title}}</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('home')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>PORTFOLIO</span></div>
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
                        <h3>Tipo</h3>
                        <p>{{$project->project_category->name}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="caseStudyInfoItem" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="650">
                        <h3>Cliente</h3>
                        <p>{{$project->customer->name}}</p>
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
                        <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">Um pouco sobre o Projeto</h2>
                        <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">{!!$project->content!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section >

        <div class="row">
            <div class="col-lg-12">
                <div class="projectSection secHeading" id="projectHeading">
                    <h3>Projetos recentes</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @forelse ($project->images as $image)
                <div class="col-md-6 col-lg-6 col-xl-4 shaf_item" >
                    <div class="project_item " >
                        <div class="project_item_thumb">
                            <img src="/storage/{{$image}}" alt="{{$project['title']}}" style="width: 100%; height: auto;" >
                        </div>
                    </div>
                </div>
            @empty
                <p>Nenhum cliente encontrado !</p>
            @endforelse
            <div class="col-md-1 col-lg-1 col-xl-1 shaf_sizer"></div>
        </div>
        <div class="container">
        </div>
    </section>





</x-app-layout>
