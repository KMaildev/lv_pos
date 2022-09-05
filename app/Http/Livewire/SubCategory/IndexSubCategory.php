<?php

namespace App\Http\Livewire\SubCategory;

use App\Models\Models\SubCategory;
use Livewire\Component;

class IndexSubCategory extends Component
{
    public $sub_categories;
    public $search = '';


    public function render()
    {
        $search = '%' . $this->search . '%';
        $this->sub_categories =  SubCategory::where('title', 'like', '%' . $search . '%')->get();
        return view('livewire.sub-category.index-sub-category');
    }
}
