<?php

namespace App\Livewire\Create;

use App\Models\University as ModelsUniversity;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Unimap Universities')]
class University extends Component
{
    private $__programs = [];
    public $programName;
    public $programPrice;

    #[Computed]
    public function programs()
    {
        session('newUniversityPrograms', $this->__programs);
        return $this->__programs;
    }

    public function addToList()
    {
        $this->__programs[] = [
            'name' => $this->programName,
            'price' => $this->programPrice
        ];
        session('newUniversityPrograms', $this->__programs);
    }

    #[Computed]
    public function user()
    {
        return session('user');
    }

    #[Computed]
    public function universities()
    {
        return ModelsUniversity::all();
    }

    public function render()
    {
        return view('livewire.create.university');
    }
}
