<?php

namespace App\Livewire\Create;

use App\Models\Program;
use App\Models\ProgramRequirement;
use App\Models\University;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use Livewire\Component;

class ProgramRequirements extends Component
{
    #[Validate('required|min:3|max:255')]
    public string $module;

    #[Validate('required|min:3|max:255')]
    public string $grades;

    #[Validate('required|integer')]
    public int $programId;

    public Program $program;

    #[Computed]
    public function user()
    {
        return session('user');
    }

    #[Computed]
    public function university()
    {
        return University::find($this->program->university_id);
    }

    private function getProgram()
    {
        $this->program = Program::findOrFail($this->programId);
    }

    public function mount(int $id)
    {
        $this->programId = $id;
    }

    public function save()
    {
        $form = $this->validate();
        $form['program_id'] = $this->programId;
        $form['grades'] = strtoupper($form['grades']);

        ProgramRequirement::create($form);
    }

    public function render()
    {
        $this->getProgram();
        return view('livewire.create.program-requirements')
            ->with('requirements', ProgramRequirement::where('program_id', $this->program->id)->get())
            ->with('university', $this->university)
            ->with('program', $this->program);
    }
}
