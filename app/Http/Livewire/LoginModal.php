<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoginModal extends Component
{
    public $login;
    public $password;

    protected function rules() {
        return [
            'login' => 'required',
            'password' => [
                'required',
                'min:8',             // must be at least 8 characters in length
                //'regex:/[a-z]/',      // must contain at least one lowercase letter
               // 'regex:/[A-Z]/',      // must contain at least one uppercase letter
                //'regex:/[0-9]/',      // must contain at least one digit
                //'regex:/[@$!%*#?&]/', // must contain a special character
            ],
        ];
    }

    protected $validationAttributes = [
        'login' => 'логин',
        'password' => 'пароль'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        $this->validate();

        if (Auth::attempt(['login' => $this->login, 'password' => $this->password])) {
            if (Auth::user()->role_id == 1){
                return redirect()->to('/home');
            } else {
                return redirect()->to('/cabinet');
            }
        } else {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.login-modal');
    }
}
