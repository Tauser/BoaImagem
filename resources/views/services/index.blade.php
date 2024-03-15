<x-app-layout >

    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>Serviços</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('sobre')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>{{ $category->name }}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="serviceSection04">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="project_item projectItemView" data-firstline="Ver" data-secondline="Detalhes" data-aos="fade-up" data-aos-duration="1900">
                        <div class="col-md-6 col-lg-4">
                            <div class="serviceItem02" data-aos="fade-right" data-aos-duration="2000" >
    {{--                            <div class="serviceThumb02" >--}}
    {{--                                <div class="serThumbIim">--}}
    {{--                                    <img src="img/icon/exclamacao.png" alt="{{$service->title}}">--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
                                <div class="serviceContent02">
                                    <h3><a href="{{route('services.view',  [$category->slug ,$service])}}">{{$service->title}}</a></h3>
                                    <p>{{$service->description}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-app-layout>
