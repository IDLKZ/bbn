<?php

namespace App\Http\Livewire;

use App\Models\HelpFunds;
use Livewire\Component;
use Manny\Manny;

class FundsModal extends Component
{
    public $email;
    public $login;
    public $phone;
    public $text;
    public $title;
    public $data = [];

    protected $rules = [
        'login' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'text' => 'required',
        'title' => 'nullable'
    ];

    protected $validationAttributes = [
        'login' => 'имя',
        'phone' => 'номер телефона',
        'email' => 'e-mail',
        'text' => 'текст',
        'title' => 'наименование компании'
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

        HelpFunds::firstOrCreate([
           'login' => $this->login,
           'email' => $this->email,
           'phone' => $this->phone,
           'text' => $this->text,
           'title' => $this->title
        ]);

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.funds-modal');
    }
}
