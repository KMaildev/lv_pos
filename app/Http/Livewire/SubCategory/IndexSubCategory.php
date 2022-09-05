<?php

namespace App\Http\Livewire\SubCategory;

use App\Models\Models\Category;
use App\Models\Models\SubCategory;
use App\Models\Modes\Traditional;
use Livewire\Component;

class IndexSubCategory extends Component
{
    public $categories;
    public $traditionals;
    public $sub_categories;

    public $search = '';
    public $main_categorie_id_search = '';
    public $traditional_id = '';


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        $this->categories = Category::all();
        $this->traditionals = Traditional::all();
    }


    public function render()
    {
        // if ($this->search != '') {
        //     $this->sub_categories = SubCategory::where('title', 'like', '%' . $this->search . '%')
        //         ->get();
        // } elseif ($this->main_categorie_id_search != '') {
        //     $this->sub_categories = SubCategory::where('main_categorie_id', $this->main_categorie_id_search)
        //         ->get();
        // } else {
        //     $this->sub_categories =  SubCategory::where('title', 'like', '%' . $this->search . '%')->get();
        // }

        if ($this->search != '') {
            $this->sub_categories =  SubCategory::all();
        } else {
            $this->sub_categories =  SubCategory::where('title', 'like', '%' . $this->search . '%')->get();
        }

        return view('livewire.sub-category.index-sub-category');
    }


    public function searchMainCategory($value)
    {
        $this->main_categorie_id_search = $value;
    }

    public function searchTraditionals($value)
    {
        $this->traditional_id = $value;
    }
}
