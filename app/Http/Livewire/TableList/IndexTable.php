<?php

namespace App\Http\Livewire\TableList;

use App\Models\Models\TableList;
use Livewire\Component;

class IndexTable extends Component
{
    public $table_lists;

    public function render()
    {
        $this->table_lists = TableList::all();
        return view('livewire.table-list.index-table');
    }
}
