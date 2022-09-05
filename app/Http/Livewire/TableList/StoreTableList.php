<?php

namespace App\Http\Livewire\TableList;

use App\Models\Models\FloorList;
use App\Models\Models\TableList;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreTableList extends Component
{
    use WithFileUploads;
    public $floor_lists;
    public $floor_list_id, $table_no, $reservation, $table_icon;

    public function render()
    {
        $this->floor_lists = FloorList::all();
        return view('livewire.table-list.store-table-list');
    }


    private function resetInputFields()
    {
        $this->floor_list_id = '';
        $this->table_no = '';
        $this->reservation = '';
        $this->table_icon = '';
    }

    protected $rules = [
        'floor_list_id' => 'required',
        'table_no' => 'required',
        'reservation' => 'required',
    ];

    public function storeTableList()
    {
        $this->validate();
        $save = new TableList();
        $save->floor_list_id = $this->floor_list_id;
        $save->table_no = $this->table_no;
        $save->reservation = $this->reservation;
        if ($this->table_icon) {
            $icon = $this->table_icon->store('table_icon', 'public');
            $save->table_icon = $icon;
        }
        $save->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->resetInputFields();
    }
}
