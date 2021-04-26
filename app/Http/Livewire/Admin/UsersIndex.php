<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersIndex extends Component
{
    use WithPagination;

    protected $paginationTheme = "bootstrap";
    public $search;
    public $sort = 'id';
    public $direction = 'desc';
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $users = User::where('name', 'LIKE','%' . $this->search . '%') 
                     ->orWhere('email', 'LIKE','%' . $this->search . '%')
                     ->orderBy($this->sort, $this->direction)
                     ->latest('id')
                     ->paginate(8);
        return view('livewire.admin.users-index', compact('users'));
    }

    public function order($sort)
    {
        if ($this->sort == $sort) {
            if ($this->direction == 'desc') {
                $this->direction = 'asc';
            } else {
                $this->direction = 'desc';
            }
        } else {
            $this->sort = $sort;
            $this->direction = 'asc';
        }
        
        $this->sort = $sort;
    }
}
