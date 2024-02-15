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

    {{-- <customerList class="container text-center" style="display: block; margin: 0 auto; ">

        <section class="projectSection02">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="secHeading" id="projectHeading">
                            <h3>Categorias</h3>
                        </div>
                        <div class="projectCat_area">
                            <ul class="filterBTN_bare openHoverCursor">
                                @foreach ($categories as $category)
                                    <li class="filterBTN" data-group="{{$category->name}}"><a href="javascript:void(0);">{{$category->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row shafull_container ">
                    @foreach ($customers as $customer)
                    <div class="col-md-6 col-lg-6 col-xl-4 shaf_item" data-groups='["{{$customer->category->name}}",]'>
                        <div class="project_item projectItemView" data-firstline="Mais" data-secondline="Detalhes" data-aos="fade-up" data-aos-duration="1900" >
                            <div class="project_item_thumb">
                                <img src="{{$customer->getThumbnail()}}" alt="{{$customer->name}}">
                            </div>
                            <a href="#" class="project_item_dtls">
                                <div class="projectInfoContent">
                                    <i class="boozy-down-arrow strokeText"></i><br>
                                    <h3 class="ps_item_name">{{$customer->name}}</h3><br>
                                    <h5 class="ps_auth_name">{{$customer->content}}</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-1 col-lg-1 col-xl-1 shaf_sizer"></div>
                </div>
                {{$customers->links()}}
            </div>
        </section>
    </customerList> --}}

</x-app-layout>
