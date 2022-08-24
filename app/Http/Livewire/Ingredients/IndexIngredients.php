<?php

namespace App\Http\Livewire\Ingredients;

use App\Models\Models\Ingredients;
use Livewire\Component;

class IndexIngredients extends Component
{
    public $searchTerm;
    public $ingredients;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->ingredients =  Ingredients::where('title', 'like', '%' . $searchTerm . '%')->get();
        return view('livewire.ingredients.index-ingredients');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Ingredients::find($id)->delete();
    }
}
