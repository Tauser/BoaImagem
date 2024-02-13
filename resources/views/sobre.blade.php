<x-app-layout>
    <section class="banner" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>Nossa História</h2>
                        <div class="pageBannerPath">
                            <a href="index.html">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>SOBRE</span></div>
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
