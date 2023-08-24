<ul class="pagination">
    {{-- Hiển thị nút "Trang trước" --}}
    @if ($paginator->onFirstPage())
        <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="prev-arrow"><i class="fa fa-long-arrow-left"
                aria-hidden="true"></i></a>
    @endif

    {{-- Hiển thị các số phân trang từ 1 đến 5 --}}
    @for ($i = 1; $i <= min(5, $paginator->lastPage()); $i++)
        @if ($paginator->currentPage() == $i)
            <a href="{{ $i }}" class="active">{{ $i }}</a>
        @else
            <a class="" href="{{ $paginator->url($i) }}">{{ $i }}</a>
        @endif
    @endfor

    {{-- Hiển thị nút "Trang tiếp theo" --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="next-arrow"><i class="fa fa-long-arrow-right"
                aria-hidden="true"></i></a>
    @else
        <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
    @endif
</ul>

{{-- <div class="pagination">
                    <a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                    <a href="#">6</a>
                    <a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div> --}}
