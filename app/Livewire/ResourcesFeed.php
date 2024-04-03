<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Resources;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Computed;

class ResourcesFeed extends Component
{
    use WithPagination;

    public $category;
    public $language;

    public function convertRgbToRgba(string $rgbColor): string
    {
        $rgbaColor = str_replace('rgb', 'rgba', $rgbColor);
        $rgbaColor = rtrim($rgbaColor, ')') . ', ' . 0.2 . ')';

        return $rgbaColor;
    }

    #[Computed]
    public function resources()
    {
        return Resources::with('category', 'languages')
            ->when($this->category, function ($query) {
                return $query->where('category_id', $this->category);
            })
            ->when($this->language, function ($query) {
                return $query->where('language_id', $this->language);
            })
            ->latest()
            ->paginate(5);
    }

    #[On('categorySelected')]
    public function updatedCategory($value)
    {
        $this->category = $value;
    }

    #[On('languageSelected')]
    public function updatedLanguage($value)
    {
        $this->language = $value;
    }

    public function render()
    {
        return view('livewire.resources-feed');
    }
}
