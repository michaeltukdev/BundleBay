<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Resources;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Livewire\WithPagination;

class ResourcesFeed extends Component
{
    use WithPagination;

    public function render()
    {
        $resources = Resources::with('category', 'languages')->latest()->paginate(5);    

        return view('livewire.resources-feed', ['resources' => $resources]);
    }
}
