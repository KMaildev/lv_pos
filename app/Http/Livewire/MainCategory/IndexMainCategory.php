<?php

namespace App\Http\Livewire\MainCategory;

use App\Models\Models\MainCategory;
use Livewire\Component;

class IndexMainCategory extends Component
{
    public $searchTerm;
    public $main_categories;

    public function render()
    {
        $this->main_categories = MainCategory::all();
        return view('livewire.main-category.index-main-category');
    }
}
