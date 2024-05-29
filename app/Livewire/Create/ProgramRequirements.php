<?php

namespace App\Livewire\Create;

use App\Models\University;
use Livewire\Component;

class ProgramRequirements extends Component
{
    public $university;
    public function mount(int $id)
    {
        $this->university = University::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.create.program-requirements');
    }
}
