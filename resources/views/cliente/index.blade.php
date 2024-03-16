<x-app-layout >
    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>CLIENTES</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('sobre')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>CLIENTES</span></div>
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
                        <h3>Clientes</h3>
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
                @forelse ($customers as $customer)
                <div class="col-md-6 col-lg-6 col-xl-4 shaf_item" >
                    <div class="project_item projectItemView" data-firstline="Mais" data-secondline="Detalhes" data-aos="fade-up" data-aos-duration="700" >
                        <div class="project_item_thumb">
                            <img src="{{$customer->getCover()}}" alt="{{$customer->name}}">
                        </div>
                        <a href="{{route('cliente.view', $customer)}}" class="project_item_dtls">
                            <div class="projectInfoContent">
                                <i class="boozy-down-arrow strokeText"></i><br>
                                <h3 class="ps_item_name">{{$customer->name}}</h3><br>
{{--                                <h5 class="ps_auth_name">{{$customer->service->title}}</h5>--}}
                            </div>
                        </a>
                    </div>
                </div>
                @empty
                    <p>Nenhum cliente encontrado !</p>
                @endforelse
                <div class="col-md-1 col-lg-1 col-xl-1 shaf_sizer"></div>
            </div>
            {{$customers->links()}}
        </div>

    </section>



</x-app-layout>
