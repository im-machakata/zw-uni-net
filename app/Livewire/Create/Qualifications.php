<?php

namespace App\Livewire\Create;

use App\Models\UserQualification;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Title('Unimap My Qualifications')]
class Qualifications extends Component
{
    public $user;

    #[Validate('required|max:25')]
    public string $grade = '';

    #[Validate('required|min:3|max:255|unique:user_qualifications,module,user_id')]
    public string $module = '';

    public $qualifications = [];

    public function destroy($id)
    {
        UserQualification::destroy($id);
        $this->qualifications = $this->loadQualifications();
    }
    public function save()
    {
        $this->validate();
        UserQualification::create([
            'module' => $this->module,
            'grade' => $this->grade,
            'user_id' => $this->user->id
        ]);
        $this->reset(['module', 'grade']);
        $this->loadQualifications();
    }
    public function mount()
    {
        $this->user = session('user');
        $this->loadQualifications();
    }
    public function render()
    {
        $this->loadQualifications();
        return view('livewire.create.qualifications')
            ->with('qualifications', $this->qualifications);
    }
    private function loadQualifications()
    {
        $this->qualifications = UserQualification::where('user_id', $this->user->id)->get();
    }
}
