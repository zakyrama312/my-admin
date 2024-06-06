<?php

namespace App\Livewire\Hotel;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

class HotelEdit extends Component
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

    public $hotel;

    public function mount($id){
        $this->hotel = Hotel::find($id);
        $this->name = $this->hotel->name;
        $this->phone = $this->hotel->phone;
        $this->email = $this->hotel->email;
        $this->address = $this->hotel->address;
        $this->stars = $this->hotel->stars;
        $this->check_in_time = $this->hotel->check_in_time;
        $this->check_out_time = $this->hotel->check_out_time;
    }

    public function update(){
        $this->validate();
        $this->hotel->update([
            'name' => $this->name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'stars' => $this->stars,
            'check_in_time' => $this->check_in_time,
            'check_out_time' => $this->check_out_time,
        ]);
        return $this->redirect("/hotel", navigate:true);
    }
  
    public function render()
    {
        return view('livewire.hotel.hotel-edit');
    }

    

}
