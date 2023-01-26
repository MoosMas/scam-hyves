<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    
    public $post;
    
    public function mount($post)
    {
        $this->post = $post;
    }
    
    public function toggleLike($reactionId)
    {
//        $this->post->reactions()->attach(['user_id' => auth()->id(), 'item_id' => $reactionId]);
    }
    
    public function render()
    {
        return view('livewire.post');
    }
}
