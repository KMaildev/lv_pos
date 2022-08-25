<?php

namespace App\Http\Livewire\Traditional;

use App\Models\Modes\Traditional;
use Livewire\Component;

class StoreTraditional extends Component
{
    public $title;

    public function render()
    {
        return view('livewire.traditional.store-traditional');
    }

    private function resetInputFields()
    {
        $this->title = '';
    }

    protected $rules = [
        'title' => 'required',
    ];

    public function storeTraditionals()
    {
        $this->validate();
        $save = new Traditional();
        $save->title = $this->title;
        $save->save();
        session()->flash('message', 'Your processing has been completed.');
        $this->resetInputFields();
    }
}
