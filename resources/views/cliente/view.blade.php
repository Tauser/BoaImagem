<x-app-layout>

    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>{{$customer->cus_name}}</h2>
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
                        <p>{{$customer->cus_name}}</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 col-sm-6">
                    <div class="caseStudyInfoItem" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="500">
                        <h3>Tipo</h3>
                        <p>{{$customer->service}}</p>
                    </div>
                </div>
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

    <section class="caseStudyInfoThumbSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="csStuInfoThumb animateThumb" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
                        <img src="{{$customer->getThumbnail()}}" alt="{{$customer->cus_name}}">
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
                        <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">{{$customer->content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="csStudyThumbItemsSEC">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="csStuThumbItem animateThumb" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800">
                        <img src="{{$customer->getThumbnail()}}" alt="{{$customer->cus_name}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="csStuThumbItem animateThumb" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <img src="{{$customer->getThumbnail()}}" alt="{{$customer->cus_name}}">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="caseStudyInfoContetnsec02">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="csStuInfoContent">
                        <h2 data-aos="fade-down" data-aos-easing="linear" data-aos-duration="700">resultados</h2>
                        <p data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">{{$customer->results}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BEGIN: Case Studyinfo Content -->
</x-app-layout>
