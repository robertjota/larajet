<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    public $search;

    //reset la pagina cada vez que se escribe en el metodo $search
    public function updatingSearch()
    {
        $this->resetPage();
    }

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $users = User::where('name', 'LIKE', '%' . $this->search . '%')
                        ->orwhere('email', 'LIKE', '%' . $this->search . '%')
                        ->paginate(6);

        return view('livewire.admin.users-index', compact('users'));
    }
}
