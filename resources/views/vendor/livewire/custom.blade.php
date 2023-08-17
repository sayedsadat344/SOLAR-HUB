<div>
    @if ($paginator->hasPages())
        <nav class="pagination-outer" aria-label="Page navigation">
            <ul class="pagination">







                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a href="javascript:void(0)"
                    dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                    class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                    wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">
                    <span aria-hidden="true">«</span>
                </a>
                </li>
                @else
                    <li class="page-item">
                        <a href="javascript:void(0)"
                            dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                            class="page-link" wire:click="previousPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled" rel="prev" aria-label="@lang('pagination.previous')">
                            <span aria-hidden="true">«</span>
                        </a>
                    </li>
                @endif


                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span
                                class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')"
                                    wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"><a
                                        class="page-link" href="javascript:void(0)" aria-current="page">{{ $page }}</a>
                                </li>
                            @else
                                <li class="page-item"
                                    wire:key="paginator-{{ $paginator->getPageName() }}-page-{{ $page }}"><a
                                        class="page-link" href="javascript:void(0)"
                                        wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach



                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())


                <li class="page-item">
                    <a href="javascript:void(0)" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                        wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>


                @else

                <li class="page-item disabled">
                    <a href="javascript:void(0)" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        class="page-link" wire:click="nextPage('{{ $paginator->getPageName() }}')"
                        wire:loading.attr="disabled" rel="next" aria-label="@lang('pagination.next')">
                        <span aria-hidden="true">»</span>
                    </a>
                </li>


                @endif



            </ul>
        </nav>
    @endif

</div>


