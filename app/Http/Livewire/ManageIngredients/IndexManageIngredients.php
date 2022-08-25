<?php

namespace App\Http\Livewire\ManageIngredients;

use App\Models\Models\Ingredients;
use App\Models\Models\ManageIngredients;
use App\Models\Models\SubCategory;
use Livewire\Component;

class IndexManageIngredients extends Component
{

    public $sub_categorie, $ingredients, $manage_ingredients; //datatable_table

    public $ingredient_id, $unit, $number_of_unit, $price, $sub_categorie_id;

    public function mount($id)
    {
        $this->sub_categorie = SubCategory::find($id);
        $this->ingredients =  Ingredients::all();
        $this->sub_categorie_id = $id;
    }

    public function render()
    {
        $this->manage_ingredients = ManageIngredients::get()->where('sub_categorie_id', $this->sub_categorie_id);
        return view('livewire.manage-ingredients.index-manage-ingredients');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function changeEvent($value = null)
    {
        if ($value == null) {
            $this->unit = '';
        } else {
            $ingredient = Ingredients::findOrFail($value);
            $this->unit = $ingredient->unit;
        }
    }

    private function resetInputFields()
    {
        $this->ingredient_id = '';
        $this->unit = '';
        $this->number_of_unit = '';
        $this->price = '';
        $this->price = '';
    }

    protected $rules = [
        'ingredient_id' => 'required',
        'number_of_unit' => 'required',
        'price' => 'required|numeric',
        'sub_categorie_id' => 'required',
    ];

    public function storeManageIngredients()
    {
        $this->validate();
        $save = new ManageIngredients();
        $save->ingredient_id = $this->ingredient_id;
        $save->sub_categorie_id = $this->sub_categorie_id;
        $save->number_of_unit = $this->number_of_unit;
        $save->price = $this->price;
        $save->user_id = auth()->user()->id ?? 0;
        $save->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        ManageIngredients::find($id)->delete();
        session()->flash('message', 'Deleted Successfully.');
    }
}
