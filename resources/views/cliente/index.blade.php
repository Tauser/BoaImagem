<x-app-layout >
    <TitleCLients>
        <container class="container">
            <div class="row">
                <div class="col-6">
                    <h1>Clientes</h1>
                    <subtitle>Instigar a pessoa a conhecer nossos antigos trabalhos.</subtitle>
                </div>
                <div class="col-6">
                    <p>  It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </container>
    </TitleCLients>

    <customerList class="container text-center" style="display: block; margin: 0 auto; ">

        <section class="projectSection02">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="secHeading" id="projectHeading">
                            <h3>Categorias</h3>
                        </div>
                        <div class="projectCat_area">
                            <ul class="filterBTN_bare openHoverCursor">
                                <li class="filterBTN" data-group="web"><a href="javascript:void(0);">web design</a></li>
                                <li class="filterBTN" data-group="brand"><a href="javascript:void(0);">Brand</a></li>
                                <li class="filterBTN" data-group="dev"><a href="javascript:void(0);">Development</a></li>
                                <li class="filterBTN" data-group="photography"><a href="javascript:void(0);">Photography</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row shafull_container ">
                    @foreach ($customers as $customer)
                    <div class="col-md-6 col-lg-6 col-xl-4 shaf_item" data-groups='["web","dev"]'>
                        <div class="project_item projectItemView" data-firstline="Mais" data-secondline="Detalhes" data-aos="fade-up" data-aos-duration="1900" >
                            <div class="project_item_thumb">
                                <img src="{{$customer->getThumbnail()}}" alt="{{$customer->name}}">
                            </div>
                            <a href="case-studies.html" class="project_item_dtls">
                                <div class="projectInfoContent">
                                    <i class="boozy-down-arrow strokeText"></i><br>
                                    <h3 class="ps_item_name">{{$customer->name}}</h3><br>
                                    {{-- <h5 class="ps_auth_name">{{$customer->content}}</h5> --}}
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
    </customerList>

</x-app-layout>
