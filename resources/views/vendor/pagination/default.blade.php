@if ($paginator->hasPages())
    <ul style="list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li style=" float: left;" class="disabled">
        
         <li style=" float: left;" class="disabled"><span style="
  
  
  padding: 16px;
  ">&laquo;</span></li>
  
        @else
        <li style=" float: left;" class="disabled">

            <li style=" float: left;"><a style="
  
  
  
  padding: 16px;
  " href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a></li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li style=" float: left;"  class="disabled"><span>{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li style=" float: left;" class="active"><span>{{ $page }}</span></li>
                    @else
                        <li style=" float: left;"><a style="
  
  
  
  padding: 16px;
  " href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        
            <li style=" float: left;"><a style="
  
  
  
  padding: 16px;
  " href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li style=" float: left;" class="disabled"><span style="
  
  
                padding: 16px;">&raquo;</span></li>
        @endif
    </ul>
@endif
