<div>
    @foreach ($resources as $resource)
        <div class="resource">
            <p class="resource-title">{{ $resource->name }}</p>
            <p>{{ Str::limit($resource->summary, 50) }}</p>
        </div>
    @endforeach

    {{ $resources->links() }}
</div>