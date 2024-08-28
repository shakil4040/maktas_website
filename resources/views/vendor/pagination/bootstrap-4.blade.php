@if ($paginator->hasPages())
    <style>
        .pagination li {
            padding:0 !important;
        }
        .pagination .page-item .page-link {
            color:hsl(164deg 72% 23%);
        }
        .pagination .page-item.active .page-link{
            background-color:hsl(164deg 72% 23%);
            border-color: hsl(164deg 72% 23%);
            color:#FFFFFF;
        }
        .pagination .page-item:first-child .page-link {
            border-radius: 0 .25rem .25rem 0;
        }
        .pagination .page-item:last-child .page-link {
            border-radius: .25rem 0 0 .25rem;
        }
    </style>
    <nav>
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <span class="page-link" aria-hidden="true">@lang('pagination.previous')</span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">@lang('pagination.previous')</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link">@lang('pagination.numbers.'.$page)</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">@lang('pagination.numbers.'.$page)</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')</a>
                </li>
            @else
                <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">@lang('pagination.next')</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
