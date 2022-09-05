<?php

namespace App\Http\Livewire\SubCategory;

use App\Models\Models\MainCategory;
use App\Models\Models\SubCategory;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreSubCategory extends Component
{

    use WithFileUploads;
    public $main_categories; //->main_category_table

    // Input Fields 
    public $main_categorie_id, $title, $photo, $price;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        $this->main_categories = MainCategory::all();
    }


    public function render()
    {
        return view('livewire.sub-category.store-sub-category');
    }


    private function resetInputFields()
    {
        $this->main_categorie_id = '';
        $this->title = '';
        $this->price = '';
        $this->photo = '';
    }

    protected $rules = [
        'title' => 'required',
        'main_categorie_id' => 'required',
        'price' => 'required|numeric',
        'photo' => 'required',
    ];

    public function storeSubCategory()
    {
        $this->validate();
        $save = new SubCategory();
        $save->categorie_id = 0;
        $save->main_categorie_id = $this->main_categorie_id;
        $save->traditional_id = 0;
        $save->title = $this->title;
        $save->price = $this->price;
        $save->user_id = auth()->user()->id ?? 0;

        if ($this->photo) {
            $photo = $this->photo->store('images', 'public');
            $save->photo = $photo ?? '';
        }

        $save->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->resetInputFields();
    }
}
