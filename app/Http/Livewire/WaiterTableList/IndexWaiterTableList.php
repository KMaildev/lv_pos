<?php

namespace App\Http\Livewire\WaiterTableList;

use App\Models\Models\TableList;
use Livewire\Component;

class IndexWaiterTableList extends Component
{

    public $table_lists;
    public $searchTableNo;
    public $table_list_id;
    public $guestsModalStatus = false;

    public function render()
    {
        $this->table_lists =  TableList::where('table_no', 'like', '%' . $this->searchTableNo . '%')->get();
        return view('livewire.waiter-table-list.index-waiter-table-list');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openGuestsModal($id)
    {
        $this->table_list_id = $id;
        $this->guestsModalStatus = true;
    }
}
