<?php

namespace App\Http\Livewire\FloorList;

use App\Models\Models\FloorList;
use Livewire\Component;

class StoreFloorList extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.floor-list.store-floor-list');
    }

    private function resetInputFields()
    {
        $this->title = '';
    }

    protected $rules = [
        'title' => 'required',
    ];

    public function storeFloorList()
    {
        $this->validate();
        $save = new FloorList();
        $save->title = $this->title;
        $save->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->resetInputFields();
    }
}
