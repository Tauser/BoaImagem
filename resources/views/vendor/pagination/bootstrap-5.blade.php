@if ($paginator->hasPages())
            <div class="col-md-8 items-center">
                <div class="boozyPagination blogGridPagination" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1200">
                    <nav class="navigation pagination" aria-label="Posts">
                        <div class="nav-links">
                            @if ($paginator->onFirstPage())
                                <a class="prev page-numbers disabled" href=""><i class="fa-solid fa-chevron-left"></i></a>
                            @else
                                <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}"><i class="fa-solid fa-chevron-left"></i></a>
                            @endif

                            @foreach ($elements as $element)
                                {{-- "Three Dots" Separator --}}
                                @if (is_string($element))
                                    <a class="page-numbers disabled" href="">{{ $element }}</a>
                                @endif

                                {{-- Array Of Links --}}
                                @if (is_array($element))
                                    @foreach ($element as $page => $url)
                                        @if ($page == $paginator->currentPage())
                                            <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                                        @else
                                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach

                            @if ($paginator->hasMorePages())
                                <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}"><i class="fa-solid fa-chevron-right"></i></a>
                            @else
                                <a class="next page-numbers disabled" href=""><i class="fa-solid fa-chevron-right"></i></a>
                            @endif
                        </div>
                    </nav>
                </div>
            </div>

@endif


