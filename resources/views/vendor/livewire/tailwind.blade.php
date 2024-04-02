@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

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
            <button wire:click="gotoPage('1')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-left-double-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </button>

            <button wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-left-s-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </button>
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
            <button wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-right-s-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </button>

            <button wire:click="gotoPage('{{ $paginator->lastPage() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="p-2.5 group rounded-lg bg-container">
                @svg('ri-arrow-right-double-line', 'w-4 text-primary-text group-hover:text-primary transition')
            </button>
        @endif
    </nav>
@endif
