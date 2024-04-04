<?php

namespace App\Livewire;

use App\Models\Suggestions;
use Livewire\Component;
use Livewire\Attributes\Validate;

class SuggestionModal extends Component
{
    #[Validate]
    public $link = '';

    public function rules()
    {
        return [
            'link' => 'required|url|unique:suggestions,link',
        ];
    }

    public function messages()
    {
        return [
            'link.unique' => 'Resource already suggested!',
        ];
    }

    public function save()
    {
        $validated = $this->validate();

        Suggestions::create($validated);

        $this->link = '';

        session()->flash('saved', 'Suggestion has been submitted!');
    }

    public function render()
    {
        return view('livewire.suggestion-modal');
    }
}
