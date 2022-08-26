<?php

namespace App\Http\Livewire\WaiterMenu;

use App\Models\Models\Category;
use App\Models\Models\SubCategory;
use App\Models\Modes\Traditional;
use Livewire\Component;

class IndexWaiterMenu extends Component
{

    public $categories;
    public $traditionals;
    public $sub_categories;

    public $search = '';
    public $main_categorie_id_search = '';


    public $guest_number;

    public function mount($guest_number)
    {
        $this->categories = Category::all();
        $this->traditionals = Traditional::all();

        $this->guest_number = $guest_number;
    }

    public function render()
    {
        if ($this->search != '') {
            $this->sub_categories = SubCategory::where('title', 'like', '%' . $this->search . '%')
                ->get();
        } elseif ($this->main_categorie_id_search != '') {
            $this->sub_categories = SubCategory::where('main_categorie_id', $this->main_categorie_id_search)
                ->get();
        } else {
            $this->sub_categories =  SubCategory::where('title', 'like', '%' . $this->search . '%')->get();
        }
        return view('livewire.waiter-menu.index-waiter-menu');
    }


    public function searchMainCategory($value)
    {
        $this->main_categorie_id_search = $value;
    }
}
