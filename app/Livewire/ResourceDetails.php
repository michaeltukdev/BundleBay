<?php

namespace App\Livewire;

use App\Models\Resources;
use Livewire\Component;

class ResourceDetails extends Component
{
    public $resource;

    protected $listeners = ['selectResource'];

    public function selectResource($resourceId)
    {
        $this->resource = $resourceId;
    }
    public function mount($resource = null)
    {
        $this->resource = $resource;
    }

    public function render()
    {
        return view('livewire.resource-details');
    }
}
