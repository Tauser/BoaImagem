<swiper-container class="mySwiper" pagination="true" pagination-clickable="true" direction="vertical"
    space-between="30" mousewheel="true" loop="true">

    <swiper-slide style="background-image: url(https://swiperjs.com/demos/images/nature-1.jpg);">
      <div class="title" >Client X</div>
      <div class="subtitle" >Anúncios patrocinados, Automação de marketing, Mídias Sociais, Marketing de Conteúdo, Criação de sites, SEO - Otimização</div>
      <div class="text" >
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
          dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
          laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
          Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
          Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
          ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
          tincidunt ut libero. Aenean feugiat non eros quis feugiat.
        </p>
      </div>
    </swiper-slide>
    <swiper-slide>Slide 2</swiper-slide>
    <swiper-slide>Slide 3</swiper-slide>

    {{-- @foreach ($posts as $post)
        <swiper-slide>Slide 1</swiper-slide>
    @endforeach --}}
  </swiper-container>
