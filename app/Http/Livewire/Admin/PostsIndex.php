<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsIndex extends Component
{
    use WithPagination;
    protected $paginationTheme = "Bootstrap";
    public $sort = 'id';
    public $direction = 'desc';
    public $search;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $posts = Post::where('user_id', auth()->user()->id)
                     ->where('name', 'LIKE','%' . $this->search . '%')
                     ->orderBy($this->sort, $this->direction)
                     ->latest('id')
                     ->paginate(8);
        return view('livewire.admin.posts-index', compact('posts'));
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
