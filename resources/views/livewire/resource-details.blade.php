<div class="p-8 rounded-lg shadow-xl bg-container">
    @if ($resource)
        <div class="flex items-center justify-between">
            <div>
                <p class="resource-title">{{ $resource['name'] }}</p>
                <p>{{ $resource['summary'] }}</p>
            </div>
            <div class="flex items-center gap-3">
                @if ($resource['github_link'])
                    <a target="_blank" href="{{ $resource['github_link'] }}">
                        @svg('ri-github-fill', 'h-6 text-secondary-text hover:text-primary transition')
                    </a>
                @endif

                @if ($resource['website_link'])
                    <a  target="_blank" href="{{ $resource['website_link'] }}">
                        @svg('ri-global-fill', 'h-6 text-secondary-text hover:text-primary transition')
                    </a>
                @endif
            </div>
        </div>

        <hr class="my-8 text-lg border-3 h-100 text-input"></hr>

        <div>
            {!! $resource['content'] !!}
        </div>

    @endif
</div>
