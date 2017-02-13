@if ($paginator->hasPages())
    <ul class="pager">
        <!-- Link da página anterior -->
        @if ($paginator->onFirstPage())
            <li class="disabled">
                <span class="glyphicon glyphicon-menu-left" aria-hiden="true"> Anterior</span>
            </li>
        @else
            <li>
                <a href="{{ $paginator->previousPageUrl() }}" rel="prev">
                    <span class="glyphicon glyphicon-menu-left" aria-hiden="true"> Anterior</span>
                </a>
            </li>
        @endif

        <!-- Elementos de Paginação -->
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="disabled">
                    <span>{{ $element }}</span>
                </li>
            @endif
            <!-- Link de Arrays -->
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active my-active">
                            <span> {{ $page }}</span>
                        </li>
                    @else
                        <li>
                            <a href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach
        <!-- Próximo Link -->
        @if ($paginator->hasMorePages())
            <li>
                <a href="{{ $paginator->nextPageUrl() }}" rel="next"> Próximo
                    <span class="glyphicon glyphicon-menu-right" aria-hiden="true"></span></a>
            </li>
        @else
            <li class="disabled">
                Próximo <span class="glyphicon glyphicon-menu-right" aria-hiden="true"></span>
            </li>
        @endif
    </ul>
@endif