<?php

namespace App\Http\Livewire\Traditional;

use App\Models\Modes\Traditional;
use Livewire\Component;

class IndexTraditional extends Component
{
    public $traditionals;
    
    public function render()
    {
        $this->traditionals = Traditional::all();
        return view('livewire.traditional.index-traditional');
    }
}
