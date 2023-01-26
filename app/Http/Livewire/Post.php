<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    
    public $post;
    
    public $liked = false;
    
    public function mount($post)
    {
        $this->post = $post;
    }
    
    public function toggleLike()
    {
        $this->liked = !$this->liked;
    }
    
    public function render()
    {
        return view('livewire.post');
    }
}
