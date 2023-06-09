<div class="card-footer d-block d-md-flex align-items-center d-print-none">
    <div class="d-flex mb-2 mb-md-0">Showing {{ $permissions->firstItem() }} to {{ $permissions->lastItem() }} of
        {{ $permissions->total() }}
        Entries</div>

    <nav class="d-flex ml-md-auto d-print-none" aria-label="Pagination">
        <ul class="pagination justify-content-end font-weight-semi-bold mb-0">
            <li class="page-item">
                <a id="datatablePaginationPrev" class="page-link" href="{{ $permissions->previousPageUrl() }}"
                    aria-label="Previous">
                    <i class="gd-angle-left icon-text icon-text-xs d-inline-block"></i>
                </a>
            </li>

            @foreach ($permissions->getUrlRange(1, $permissions->lastPage()) as $page => $url)
                <li class="page-item d-none d-md-block {{ $permissions->currentPage() === $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}"
                        data-dt-page-to="{{ $page }}">{{ $page }}
                    </a>
                </li>
            @endforeach

            <li class="page-item">
                <a id="datatablePaginationNext" class="page-link" href="{{ $permissions->nextPageUrl() }}"
                    aria-label="Next">
                    <i class="gd-angle-right icon-text icon-text-xs d-inline-block"></i>
                </a>
            </li>
        </ul>
    </nav>
</div>
