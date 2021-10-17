<?php

namespace App\Http\Livewire;

use App\Models\GetConsultation;
use Livewire\Component;
use Manny\Manny;

class ConsultationModal extends Component
{
    public $name;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'phone' => 'required'
    ];

    protected $validationAttributes = [
        'name' => 'имя',
        'phone' => 'номер телефона'
    ];

    public function updated($propertyName)
    {
        if ($propertyName == 'phone')
        {
            $this->phone = Manny::mask($this->phone, "1(111) 111-1111");
        }
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        $cons = GetConsultation::firstOrCreate([
           'name' => $this->name,
           'phone' => $this->phone
        ]);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.consultation-modal');
    }
}
