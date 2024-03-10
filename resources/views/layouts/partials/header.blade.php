@php
    $getCategoryHeader = App\Models\ServiceCategory::getCategoryMenu();
    $getSubcategoryHeader = App\Models\ServiceSubcategory::getSubcategoryMenu();
@endphp
<header class="header01 isSticky">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="headerInner01">
                    <div class="logo">
                        <a class="dfCursor" href="{{route('home')}}">
                            <img src="{{asset("img/logoHome.png")}}" width="160px">
                        </a>
                    </div>
                    <nav class="mainMenu">
                        <ul>
                            <li>
                                <a data-title="Quem somos" href="{{route('sobre')}}"><span>Quem Somos</span></a>
                            </li>

                            <li class="menu-item-has-children">
                                <a data-title="Portfolio" href="javascript:void(0);"><span>Portfólio</span></a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:void(0);">Cases</a></li>
                                    <li><a href="javascript:void(0);">Clientes</a></li>
                                    <li><a href="javascript:void(0);">Videos</a></li>
                                    <li><a href="javascript:void(0);">Fotos 360</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a data-title="Servicos" href="javascript:void(0);"><span>Serviços</span></a>
                                <ul class="sub-menu">
                                    @foreach($getCategoryHeader as $category)
                                        <li><a href="{{ url("/servicos/{$category->slug}") }}">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li>
                                <a data-title="Blog" href="{{route('post.index')}}"><span>Blog</span></a>
                            </li>
                            <li>
                                <a data-title="Contato" href="{{route('contato')}}"><span>Contato</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="headerOniAccess02">
                        <a class="hdSupportBtn" href="contact.html"><i class="boozy-chat"></i> Vamos conversar?</a>
                        <a href="javascript:void(0)" class="menu_btn menuBTN02"><i class="fa-solid fa-bars"></i></a>
                        <div class="boozyGridMenu">
                            <a href="javascript:void(0);">
                                <i class="fa fa-grav" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
