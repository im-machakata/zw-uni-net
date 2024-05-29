<?php

namespace App\Livewire\Create;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Unimap University Programs')]
class Programs extends Component
{

    public function render()
    {
        return view('livewire.create.programs')
            ->with('user', session('user'));
    }
}
