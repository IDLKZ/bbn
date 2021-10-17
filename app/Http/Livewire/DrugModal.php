<?php

namespace App\Http\Livewire;

use App\Models\InfoDrug;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;
use Manny\Manny;

class DrugModal extends Component
{
    use WithFileUploads;

    public $email;
    public $name;
    public $phone;
    public $address;
    public $image;
    public $text;
    public $city;
    public $data = [];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'city' => 'required',
        'address' => 'required',
        'image' => 'nullable|image'
    ];

    protected $validationAttributes = [
        'name' => 'имя',
        'phone' => 'номер телефона',
        'city' => 'город',
        'address' => 'адрес',
        'image' => 'фотография'
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
        $this->data['name'] = $this->name;
        $this->data['email'] = $this->email;
        $this->data['phone'] = $this->phone;
        $this->data['address'] = $this->address;
        $this->data['city'] = $this->city;
        $this->data['image'] = Str::random(10) . '.' . $this->image->getClientOriginalName();
        $this->data['text'] = $this->text;
        $info = InfoDrug::add($this->data);
        if ($this->data['image']){
            $this->image->storeAs('uploads', $this->data['image']);
        }
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.drug-modal');
    }
}
