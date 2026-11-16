@if ($paginator->hasPages())
    <nav class="my-4">
        <div class="join">
            @if ($paginator->onFirstPage())
                <button
                    type="button"
                    class="join-item btn btn-outline btn-disabled"
                    disabled
                >
                    Eelmine
                </button>
            @else
                <a
                    href="{{ $paginator->previousPageUrl() }}"
                    rel="prev"
                    class="join-item btn btn-outline"
                >
                    Eelmine
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a
                    href="{{ $paginator->nextPageUrl() }}"
                    rel="next"
                    class="join-item btn btn-outline"
                >
                    Järgmine
                </a>
            @else
                <button
                    type="button"
                    class="join-item btn btn-outline btn-disabled"
                    disabled
                >
                    Järgmine
                </button>
            @endif
        </div>
    </nav>
@endif