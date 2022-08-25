<?php

namespace App\Http\Livewire\SubCategory;

use App\Models\Models\Category;
use Livewire\Component;

class IndexSubCategory extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.sub-category.index-sub-category');
    }
}
