 
@if ($paginator->hasPages())
    <nav class="alert m-0" style="background-color: #0EA15F;">
        <ul class="d-flex align-items-center flex-wrap">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled mr-2" aria-disabled="true">
                    <span aria-hidden="true">
                        <i class="icofont-long-arrow-left"></i>
                    </span>
                </li>
            @else
            <li class="page-item">
            <a href="{{ $paginator->previousPageUrl() }}" class="page-link" aria-label="Previous">
            <i class="ti-angle-left"></i>
            </a></li>
               
            @endif
            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled mr-2" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif
                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active mr-2" aria-current="page">
                                <span>{{ $page }}</span>
                            </li>
                        @else
                            <li class="mr-2">
                                <a href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="">
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next">
                        <i class="icofont-long-arrow-right"></i>
                    </a>
                </li>
            @else
                <li class="disabled" aria-disabled="true">
                    <span aria-hidden="true">
                        <i class="icofont-long-arrow-right"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif

