<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class SuggestionModal extends Component
{
    #[Validate]
    public $link = '';

    public function rules()
    {
        return [
            'link' => 'required|url',
        ];
    }

    public function save()
    {
        $validated = $this->validate();
    }

    public function render()
    {
        return view('livewire.suggestion-modal');
    }
}
