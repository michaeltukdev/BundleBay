<?php

namespace App\Livewire;

use App\Models\Resources;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ResourcesFeed extends Component
{
    public function render()
    {
        $resources = Resources::with('category', 'languages')->latest()->paginate(5);

        return view('livewire.resources-feed', ['resources' => $resources]);
    }
}
