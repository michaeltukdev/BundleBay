<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ResourcesFeed extends Component
{
    public function render()
    {
        $resources = DB::table('resources')->select('name', 'summary', 'price')->paginate(1);

        return view('livewire.resources-feed', ['resources' => $resources]);
    }
}
