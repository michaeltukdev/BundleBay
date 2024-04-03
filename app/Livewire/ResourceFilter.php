<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Languages;
use App\Models\Categories;

class ResourceFilter extends Component
{
    public $category;
    public $language;

    public function updatedCategory($value)
    {
        $this->dispatch('categorySelected', $value);
    }

    public function updatedLanguage($value)
    {
        $this->dispatch('languageSelected', $value);
    }

    public function render()
    {
        $categories = Categories::all();
        $languages = Languages::all();

        return view('livewire.resource-filter', ['categories' => $categories, 'languages' => $languages]);
    }
}
