<div class="grid lg:grid-cols-[1.9fr_3fr] gap-8 mb-8">
    <div class="flex gap-8">
        <select wire:model.live="category"
            class="text-sm bg-container hover:bg-input transition text-secondary-text py-2.5 px-3 w-full rounded-lg outline-none">
            <option selected value="">All</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <select wire:model.live="language"
            class="text-sm bg-container hover:bg-input transition text-secondary-text py-2.5 px-3 w-full rounded-lg outline-none">
            <option selected value="">All</option>
            @foreach ($languages as $language)
                <option value="{{ $language->id }}">{{ $language->language }}</option>
            @endforeach
        </select>
    </div>

    <div>

    </div>
</div>
