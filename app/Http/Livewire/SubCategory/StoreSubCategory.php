<?php

namespace App\Http\Livewire\SubCategory;

use App\Models\Models\Category;
use App\Models\Models\MainCategory;
use App\Models\Models\SubCategory;
use App\Models\Modes\Traditional;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreSubCategory extends Component
{

    use WithFileUploads;
    public $categories;  //-> Category Table
    public $main_categories; //->main_category_table
    public $traditionals;

    // Input Fields 
    public $selectedCategory = NULL;
    public $main_category_id, $traditional_id, $title, $photo, $price;

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function mount()
    {
        $this->categories = Category::all();
        $this->traditionals = Traditional::all();
        $this->main_categories = collect();
    }


    public function render()
    {
        return view('livewire.sub-category.store-sub-category');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function updatedSelectedCategory($categorie_id)
    {
        if (!is_null($categorie_id)) {
            $this->main_categories = MainCategory::where('categorie_id', $categorie_id)->get();
        }
    }

    private function resetInputFields()
    {
        $this->selectedCategory = '';
        $this->main_category_id = '';
        $this->traditional_id = '';
        $this->photo = '';
        $this->price = '';
        $this->title = '';
    }

    protected $rules = [
        'title' => 'required',
        'selectedCategory' => 'required',
        'main_category_id' => 'required',
        'traditional_id' => 'required',
        'price' => 'required|numeric',
    ];

    public function storeSubCategory()
    {
        $this->validate();
        $save = new SubCategory();
        $save->categorie_id = $this->selectedCategory;
        $save->main_categorie_id = $this->main_category_id;
        $save->traditional_id = $this->traditional_id;
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
