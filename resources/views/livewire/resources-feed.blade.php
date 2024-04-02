<div x-data="{ openItem: null }">
    @foreach ($resources as $index => $resource)
        <div
            @click.prevent="
                openItem = openItem === {{ $index }} ? null : {{ $index }};
                $dispatch('selectResource', { resourceId: {{ $resource }} });
            ">
            <div class="resource" :class="openItem === {{ $index }} ? 'border-red' : ''">
                <div class="flex items-center justify-between">
                    <p class="resource-title">{{ $resource->name }}</p>
                    <p class="category mt-[-3px]">{{ $resource->category->name }}</p>
                </div>
                <p>{{ Str::limit($resource->summary, 45) }}</p>
            </div>
        </div>
    @endforeach

    {{ $resources->links() }}
</div>
