<?php

namespace App\Livewire\Create;

use App\Models\Program;
use Livewire\Component;
use App\Models\University;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;

#[Title('Unimap University Programs')]
class UniversityPrograms extends Component
{
    #[Validate('required|min:3|max:255|unique:programs,name,university_id')]
    public string $name;

    #[Validate('required|decimal:2')]
    public $price;

    #[Validate('required|integer')]
    public int $id;

    private University $university;

    private function fetchUniversity()
    {
        if (!$this->id) return;
        $this->university = University::findOrFail($this->id);
    }

    public function mount(int $id)
    {
        $this->id = $id;
        $this->fetchUniversity();
    }

    #[Computed]
    public function user()
    {
        return session('user');
    }

    public function save()
    {
        $program = $this->validate();
        $program['university_id'] = $this->id;

        // save and reset form
        Program::create($program);
        $this->reset('name', 'price');
    }

    public function render()
    {
        return view('livewire.create.university-programs')
            ->with('university_id', $this->id)
            ->with('university', University::find($this->id ?? $this->university_id))
            ->with('programs', Program::where('university_id', $this->id ?? $this->university_id)->get());
    }
}
