@if ($paginator->hasPages())
    {{-- <div class="styled-pagination"> --}}
    <ul>
       
        @if ($paginator->onFirstPage())
            {{-- <li class="disabled"><span>← Previous</span></li> --}}
            <li class="disabled"><a class="prev"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
        @else
            <li><a class="prev" href="{{ $paginator->previousPageUrl() }}"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
            {{-- <li><a href="" rel="prev">← Previous</a></li> --}}
        @endif


      
        @foreach ($elements as $element)
           
            @if (is_string($element))
                <li class="disabled"><span>{{ $element }}</span></li>
            @endif


           
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        {{-- <li><a href="#" class="active">1</a></li> --}}
                        {{-- <li class="active"><span>{{ $page }}</span></li> --}}
                        <li><a href="#" class="active">{{$page}}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        
        @if ($paginator->hasMorePages())
            {{-- <li><a href="{{ $paginator->nextPageUrl() }}" rel="next">Next →</a></li> --}}
            <li><a class="next" href="{{ $paginator->nextPageUrl() }}"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
        @else
            {{-- <li class="disabled"><span>Next →</span></li> --}}
            <li class="disabled"><a class="next"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
        @endif
    </ul>
    {{-- </div> --}}
@endif 