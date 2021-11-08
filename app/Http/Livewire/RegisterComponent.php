<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Manny\Manny;

class RegisterComponent extends Component
{
    public $email;
    public $login;
    public $phone;
    public $password;
    public $motivation;

    protected function rules() {
        return [
            'login' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'password' => [
                'required',
                'min:8',             // must be at least 8 characters in length
                'regex:/[a-z]/',      // must contain at least one lowercase letter
                 'regex:/[A-Z]/',      // must contain at least one uppercase letter
                'regex:/[0-9]/',      // must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'motivation' => 'required'
        ];
    }

    protected $validationAttributes = [
        'login' => 'логин',
        'phone' => 'номер телефона',
        'password' => 'пароль',
        'motivation' => 'мотивация'
    ];

    public function updated($propertyName)
    {
        if ($propertyName == 'phone')
        {
            $this->phone = Manny::mask($this->phone, "1(111) 111-1111");
        }
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();

        User::firstOrCreate([
            'login' => $this->login,
            'email' => $this->email,
            'phone' => $this->phone,
            'motivation' => $this->motivation,
            'password' => bcrypt($this->password)
        ]);

        if (Auth::attempt(['login' => $this->login, 'password' => $this->password])) {
            return redirect()->to('/cabinet');
        }
    }

    public function render()
    {
        return view('livewire.register-component');
    }
}
