<?php

namespace App\Http\Livewire\Pos;

use App\Models\Models\SubCategory;
use Livewire\Component;

class IndexPos extends Component
{
    public $sub_categories;
    public $search = '';

    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->sub_categories =  SubCategory::where('title', 'like', '%' . $search . '%')->get();
        return view('livewire.pos.index-pos');
    }
}
