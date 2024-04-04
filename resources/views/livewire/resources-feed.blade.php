<div x-data>
    @forelse ($this->resources() as $resource)
        <div @click.prevent="$dispatch('selectResource', { resourceId: {{ $resource->id }} });">
            <div class="resource">
                <div class="flex items-center justify-between">
                    <p class="resource-title">{{ $resource->name }}</p>
                    <p style="color: {{ $resource->category->color }}; background: {{ $this->convertRgbToRgba($resource->category->color) }};"
                        class="category mt-[-3px]">{{ $resource->category->name }}</p>
                </div>
                <p>{{ Str::limit($resource->summary, 45) }}</p>
            </div>
        </div>
    @empty
        <p>No resources found.</p>
    @endif

    {{ $this->resources()->links() }}
</div>
