<?php

namespace App\Http\Livewire\Category;

use App\Models\Models\Category;
use Livewire\Component;

class StoreCategory extends Component
{

    public $title, $type;

    public function render()
    {
        return view('livewire.category.store-category');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->title = '';
        $this->type = '';
    }

    protected $rules = [
        'title' => 'required',
        'type' => 'required',
    ];

    public function storeCategory()
    {
        $this->validate();
        $save = new Category();
        $save->title = $this->title;
        $save->type = $this->type;
        $save->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->resetInputFields();
    }
}
