<ul class="pagination">
    {{-- Hiển thị nút "Trang trước" --}}
    @if ($paginator->onFirstPage())
        <li class="page-item disabled">
            <span class="page-link">&laquo;</span>
        </li>
    @else
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
        </li>
    @endif

    {{-- Hiển thị các số phân trang từ 1 đến 5 --}}
    @for ($i = 1; $i <= min(10, $paginator->lastPage()); $i++)
        @if ($paginator->currentPage() == $i)
            <li class="page-item active">
                <span class="page-link">{{ $i }}</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
            </li>
        @endif
    @endfor

    {{-- Hiển thị nút "Trang tiếp theo" --}}
    @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        </li>
    @else
        <li class="page-item disabled">
            <span class="page-link">&raquo;</span>
        </li>
    @endif
</ul>
