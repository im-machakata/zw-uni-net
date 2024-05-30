<?php

namespace App\Livewire\Create;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Validate;
use App\Models\University as ModelsUniversity;

#[Title('Unimap Universities')]
class University extends Component
{
    #[Validate('required|min:3|max:255|unique:universities,name')]
    public $name;

    #[Validate('required|min:3|max:255')]
    public $about;

    #[Validate('required|min:3|max:255|email')]
    public $contactEmail;

    #[Validate('required|min:3|max:255')]
    public $website;

    #[Validate('required|min:3|max:255|url')]
    public $applicationUrl;

    #[Validate('nullable|min:3|max:255')]
    public $keywords;

    #[Validate('required|min:3|max:255')]
    public $location;

    #[Computed]
    public function user()
    {
        return session('user');
    }

    public function save()
    {
        $validated = $this->validate();

        // use the correct keys for email and application url
        $validated['contact_email'] = $validated['contactEmail'];
        $validated['application_url'] = $validated['applicaionUrl'];
        unset($validated['applicaionUrl'], $validated['contactEmail']);

        // save new university
        $university = ModelsUniversity::query()->create($validated);

        // reset form inputs
        $this->reset(array_keys($validated));

        // redirect users to add programs page
        return redirect()->to(sprintf('/universities/%s/programs', $university->id));
    }

    public function render()
    {
        return view('livewire.create.university')->with('universities', ModelsUniversity::all());
    }
}
