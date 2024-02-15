<x-app-layout>
    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>Nossa História</h2>
                        <div class="pageBannerPath">
                            <a href="{{route('sobre')}}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>SOBRE</span></div>
                      </div>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutSection02">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="boozyabHd text-center" data-aos="fade-down" data-aos-duration="1800" data-aos-easing="linear">
                        <p>We are a digital agency, focused in making good and useful product for clients and <strong>corporations</strong>. Our main <strong>mission</strong> or a description about us is placed here. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="aboutThumb_imges">
                        <div class="row">
                            <div class="col-md-5 abThumbImgcol01">
                                <div class="abThumbImg01 bzImageFlash" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="150">
                                    <img  src="assets/images/about/1.jpg" alt="about">
                                </div>
                            </div>
                            <div class="col-md-7 abThumbImgcol02">
                                <div class="abThumbImg02 bzImageFlash" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                                    <img src="assets/images/about/2.jpg" alt="about">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 aboutContentColR">
                    <div class="aboutContent">
                        <h2 data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" data-aos-duration="1600" data-aos-delay="500">We are leading <span class="abMark">digital</span> marketing <span class="abMark">agency</span> new york based</h2>
                        <div class="boozyAcordion" id="boozy_accordion">
                            <div class="accordion-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="linear">
                                <h2 class="accordion-header" id="boozy_acc_head-1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#boozy_acc_col" aria-expanded="true" aria-controls="boozy_acc_col">UI/UX dESIGN</button>
                                </h2>
                                <div id="boozy_acc_col" class="accordion-collapse collapse show" aria-labelledby="boozy_acc_head-1" data-bs-parent="#boozy_accordion">
                                    <div class="accordion-body">
                                        We can help you channel your potential implementing your idea. We take care of all your needs, crafting specific and targeted solutions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="linear">
                                <h2 class="accordion-header" id="boozy_acc_head-2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#boozy_acc_col-2" aria-expanded="true" aria-controls="boozy_acc_col-2">Braanding</button>
                                </h2>
                                <div id="boozy_acc_col-2" class="accordion-collapse collapse" aria-labelledby="boozy_acc_head-2" data-bs-parent="#boozy_accordion">
                                    <div class="accordion-body">
                                        We can help you channel your potential implementing your idea. We take care of all your needs, crafting specific and targeted solutions.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-easing="linear">
                                <h2 class="accordion-header" id="boozy_acc_head-3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#boozy_acc_col-3" aria-expanded="true" aria-controls="boozy_acc_col-3">development</button>
                                </h2>
                                <div id="boozy_acc_col-3" class="accordion-collapse collapse" aria-labelledby="boozy_acc_head-3" data-bs-parent="#boozy_accordion">
                                    <div class="accordion-body">
                                        We can help you channel your potential implementing your idea. We take care of all your needs, crafting specific and targeted solutions.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <blueArea>
        <center class="container">
            <h3>2009</h3>
            <h2>Nan sodales ligula id diam sodales gravida. Curabitur aliquet quam sem, a pretium nibh mollis eget</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, eros ac mattis egestas, odio felis
                mattis ligula, at congue ligula nisl ut sapien. Donec id efficitur turpis. Vivamus ex sapien</p>
        </center>
    </blueArea>

    <blackArea>
        <center class="container">
            <h3>2012</h3>
            <h2>Nan sodales ligula id diam sodales gravida. Curabitur aliquet quam sem, a pretium nibh mollis eget</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, eros ac mattis egestas, odio felis
                mattis ligula, at congue ligula nisl ut sapien. Donec id efficitur turpis. Vivamus ex sapien</p>
        </center>
    </blackArea> --}}

    {{-- <lista>
        <center class="container">
            <ul class="row align-items-center equipe">
                @foreach ($members as $member)
                    <li class="col-3">
                        <img src="{{$member->avatar}}">
                        <h4>{{$member->name}}</h4>
                        <subtitle>
                            {{$member->role}}
                        </subtitle>
                        <socialsLinks>
                            <a href="#">{{$member->social1}}</a>
                            <a href="#">{{$member->social2}}</a>
                            <a href="#">{{$member->social3}}</a>
                        </socialsLinks>
                    </li>
                @endforeach
            </ul>

        </center>


    </lista> --}}

    <!-- BEGIN: Team Section  -->
    <section class="teamSection">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="secHeading">
                        <h3>NOSSOS EXPERTS</h3>
                        {{-- <div class="button-wrap right">
                            <a href="javascript:void(0);">
                                <div class="button-text sticky right"><span>More members</span></div>
                                <div class="iconWrapper parallax-wrap" style="transform: translate(0px, 0px);">
                                    <div class="button-icon parallax-element" style="transform: translate(0px, 0px);">
                                        <i class="boozy-long-r-arrow"></i>
                                    </div>
                                </div>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="row teamGridRow">
                <div class="col-md-6 col-lg-4 teamItemCol">
                    <div class="team_Item" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="250">
                        <div class="teamItemInner">
                            <div class="team_thumbnail">
                                <img src="img/team/1.jpg" alt="team">
                                <div class="tm01Social">
                                    <a href="javascript:void(0);">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-github"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-youtube"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team_desc">
                                <h2>Arnold Haron</h2>
                                <a href="javascript:void(0)">Product manager</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 teamItemCol">
                    <div class="team_Item" data-aos="fade-up" data-aos-duration="1400" data-aos-delay="300">
                        <div class="teamItemInner">
                            <div class="team_thumbnail">
                                <img src="img/team/2.jpg" alt="team">
                                <div class="tm01Social">
                                    <a href="javascript:void(0);">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-dribbble"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-github"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-behance"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team_desc">
                                <h2>Arnold Haron</h2>
                                <a href="javascript:void(0)">Product manager</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 teamItemCol">
                    <div class="team_Item" data-aos="fade-up" data-aos-duration="1600" data-aos-delay="350">
                        <div class="teamItemInner">
                            <div class="team_thumbnail">
                                <img src="img/team/3.jpg" alt="team">
                                <div class="tm01Social">
                                    <a href="javascript:void(0);">
                                    <i class="fa-brands fa-facebook-f"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-dribbble"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-github"></i>
                                    </a>
                                    <a href="javascript:void(0);">
                                    <i class="fab fa-behance"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team_desc">
                                <h2>Arnold Haron</h2>
                                <a href="javascript:void(0)">Product manager</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Team Section  -->

    <!-- BEGIN: Client Testimonial Section    -->
    <section class="clientTestimonila_sec04">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client_content">
                        <h3 data-aos="fade-up" data-aos-duration="800">TRABALHAMOS COM AS MAIORES MARCAS</h3>
                        <div class="clientTestimonial02 owl-carousel" data-aos="fade-up" data-aos-duration="1100">
                            <a class="cleintLogo">
                                <img src="img/clientLogo/7.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/1.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/2.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/3.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/4.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/5.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/6.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/8.png" alt="clogo">
                            </a>
                            <a class="cleintLogo">
                                <img src="img/clientLogo/5.png" alt="clogo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: Client Testimonial Section    -->


</x-app-layout>
