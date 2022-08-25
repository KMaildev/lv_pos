<?php

namespace App\Http\Livewire\MainCategory;

use App\Models\Models\Category;
use App\Models\Models\MainCategory;
use Livewire\Component;

class StoreMainCategory extends Component
{   
    public $categories;
    public $title, $unit, $categorie_id;

    public function render()
    {
        $this->categories = Category::all();
        return view('livewire.main-category.store-main-category');
    }


    private function resetInputFields()
    {
        $this->title = '';
        $this->unit = '';
        $this->categorie_id = '';
    }

    protected $rules = [
        'title' => 'required',
        'unit' => 'required',
        'categorie_id' => 'required',
    ];

    public function storeMainCategory()
    {
        $this->validate();
        $save = new MainCategory();
        $save->title = $this->title;
        $save->unit = $this->unit;
        $save->categorie_id = $this->categorie_id;
        $save->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->resetInputFields();
    }
}
