<?php

namespace App\Livewire\Hotel;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelCreate extends Component
{
    #[Title("Hotel Create")]
    #[Validate("required", message:"Harus diisi")]
    #[Validate("min:3", message:"Minimal 3 karakter")]
    public $name;

    #[Validate("required", message:"Harus diisi")]
    #[Validate("min:12", message:"Minimal 12 karakter")]
    public $phone;

    #[Validate("required", message:"Harus diisi")]
    #[Validate("email", message:"Email tidak valid")]
    public $email;

    #[Validate("required", message:"Harus disi")]
    public $address;

    #[Validate("required", message:"Harus diisi")]
    public $stars;

    #[Validate("required", message:"Harus diisi")]
    public $check_in_time;

    #[Validate("required", message:"Harus diisi")]
    public $check_out_time;

    public function render()
    {
        return view('livewire.hotel.hotel-create');
    }

    public function create()
    {
        $this->validate();
        Hotel::create($this->all());
        return $this->redirect('/hotel', navigate:true);
    }
}
