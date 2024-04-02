@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center gap-4">
        @if ($paginator->onFirstPage())
            <span class="p-2.5 rounded-lg bg-container">
                @svg('ri-arrow-left-double-line', 'w-4 text-secondary-text')
            </span>

            <span class="p-2.5 rounded-lg bg-container">
                @svg('ri-arrow-left-s-line', 'w-4 text-secondary-text')
            </span>
        @else
            <a wire:navigate href="{{ $paginator->url(1) }}" class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-left-double-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </a>

            <a wire:navigate href="{{ $paginator->previousPageUrl() }}" class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-left-s-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </a>
        @endif

        <p class="text-primary-text text-base font-normal leading-[normal]">{{ $paginator->currentPage() }} of
            {{ $paginator->lastPage() }}</p>

        @if (!$paginator->hasMorePages())
            <span class="p-2.5 rounded-lg bg-container">
                @svg('ri-arrow-right-s-line', 'w-4 text-secondary-text')
            </span>

            <span class="p-2.5 rounded-lg bg-container">
                @svg('ri-arrow-right-double-line', 'w-4 text-secondary-text')
            </span>
        @else
            <a wire:navigate href="{{ $paginator->nextPageUrl() }}" class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-right-s-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </a>

            <a wire:navigate href="{{ $paginator->url($paginator->lastPage()) }}"
                class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-right-double-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </a>
        @endif
    </nav>
@endif
