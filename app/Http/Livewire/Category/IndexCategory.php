<?php

namespace App\Http\Livewire\Category;

use App\Models\Models\Category;
use Livewire\Component;

class IndexCategory extends Component
{
    public $searchTerm;
    public $foods, $bars;

    public function render()
    {
        $this->foods = Category::get()->where('type', 'food');
        $this->bars = Category::get()->where('type', 'bar');
        return view('livewire.category.index-category');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function CategoryDestroy($id)
    {
        Category::find($id)->delete();
        session()->flash('message', 'Your processing has been completed.');
    }
}
