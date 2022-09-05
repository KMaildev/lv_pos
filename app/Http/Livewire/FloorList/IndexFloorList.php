<?php

namespace App\Http\Livewire\FloorList;

use App\Models\Models\FloorList;
use Livewire\Component;

class IndexFloorList extends Component
{
    public $floor_lists;

    public function render()
    {
        $this->floor_lists = FloorList::all();
        return view('livewire.floor-list.index-floor-list');
    }

    public function delete($id)
    {
        FloorList::find($id)->delete();
    }
}
