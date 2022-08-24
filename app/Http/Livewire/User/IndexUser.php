<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class IndexUser extends Component
{

    public $searchTerm;
    public $users;

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->users =  User::where('name', 'like', '%' . $searchTerm . '%')->get();
        return view('livewire.user.index-user');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
