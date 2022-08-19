<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $likes = 0;
    public $dislikes = 0;
    public $views = 0;

    public function likes() {
        $this->likes =1;
        $this->dislikes = 0;
    }

    public function dislikes() {
        $this->likes = 0;
        $this->dislikes = 1;
    }


    public function render()
    {
        $this->views = 1;
        return view('livewire.counter');
    }
}
