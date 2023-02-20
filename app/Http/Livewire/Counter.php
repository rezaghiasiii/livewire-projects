<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $count = 0;

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.counter');
    }

    public function increment(): void
    {
        $this->count++;
    }

    public function decrement(): void
    {
        $this->count--;
    }
}
