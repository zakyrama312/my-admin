<?php

namespace App\Livewire\Hotel;
use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

class HotelList extends Component
{
    use WithPagination;
    #[Title("Hotel List")]

    public $search;
    public function render()
    {
        return view('livewire.hotel.hotel-list', [
            'hotels' => Hotel::where('address', 'LIKE', '%' . $this->search . '%')
            ->orWhere('name', 'LIKE', '%' . $this->search . '%')
            ->paginate(2)
        	]);
    }

    public function delete($id)
    {
        $hotel = Hotel::find($id);
        $hotel->delete();
        return $this->redirect("/hotel", navigate:true);
    }
}
