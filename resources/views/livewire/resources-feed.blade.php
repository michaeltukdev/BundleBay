<div>
    @foreach ($resources as $index => $resource)
        <div @click.prevent="$dispatch('selectResource', { resourceId: {{ $resource->id }} });">
            <div class="resource">
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
