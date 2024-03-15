<x-app-layout>
    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>Serviços</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('home')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>{{$service->title}}</span></div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ourAwwardsSection">
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <div class="secHeading" id="servicesHeading">
                        <h3>{{$service->title}}</h3>
                    </div>
                </div>
                <div class="col-md-12">
                    @foreach($service->content as $indice => $content )
                        <div class="servicesContent {{ $indice % 2 == 0 ? 'align-left' : 'align-right' }}" data-aos="fade-up" data-aos-duration="800" >
                            <div class="servicesCompany">
                                <img src="/storage/{{$content['image_content']}}" alt="{{$content['title_content']}}" style="width: 100%; height: auto;" >
                            </div>
                            <div class="servicesTime">
                                <h2>{{$content['title_content']}}</h2>
                                <p>{{$content['text_content']}}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
</x-app-layout>
