<?php

namespace App\Http\Livewire\Ingredients;

use App\Models\Models\Ingredients;
use Livewire\Component;
use Livewire\WithFileUploads;

class StoreIngredients extends Component
{
    use WithFileUploads;
    public $title, $unit, $photo;

    public function render()
    {
        return view('livewire.ingredients.store-ingredients');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->title = '';
        $this->unit = '';
        $this->photo = '';
    }

    protected $rules = [
        'title' => 'required',
        'unit' => 'required',
    ];

    public function storeUser()
    {
        $this->validate();
        $save = new Ingredients();
        $save->title = $this->title;
        $save->unit = $this->unit;
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
