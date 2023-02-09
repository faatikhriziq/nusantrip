<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use App\Models\Tours;
use Livewire\Component;
use Livewire\WithPagination;

class DetailHotel extends Component
{
    use WithPagination;
    public $hotelName,$hotelDesc,$hotelRegency,$hotelProvince,$long,$lat,$hotelAddress,$tourPrice,$hotelImage;
    public function mount($hotel_id){
        $data = Hotel::with('province','regency')->find($hotel_id);
        $this->hotelName = $data->name;
        $this->hotelDesc = $data->description;
        $this->hotelRegency = $data->regency->name;
        $this->hotelProvince = $data->province->name;
        $this->hotelImage = $data->img_thumbnail;
        $this->long = $data->longitude;
        $this->lat = $data->latitude;
        $this->hotelAddress = $data->address;
        $this->hotelPrice = $data->price;



    }
    public function render()
    {
        return view('detail-hotel')->layout('layouts.user');
    }


}
