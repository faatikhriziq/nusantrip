<?php

namespace App\Http\Livewire;

use App\Models\Tours;
use Livewire\Component;

class DetailTour extends Component
{
    public $tourName,$tourDesc,$tourRegency,$tourProvince,$long,$lat,$tourAddress,$tourHour,$tourCategory,$tourImage;
    public function render()
    {
        return view('detail-tour',[
            'tourName'=>$this->tourName,
            'tourDesc'=>$this->tourDesc,
            'tourRegency'=>$this->tourRegency,
            'tourProvince'=>$this->tourProvince,
            'long' =>$this->long,
            'lat'=>$this->lat,
            'tourAddress'=>$this->tourAddress,
            'tourHour'=>$this->tourHour,
            'tourCategory'=>$this->tourCategory,
            'tourImage'=>$this->tourImage
        ])->layout('layouts.user');
    }

    public function mount($tour_id){
        $data = Tours::with('category','province','regency')->find($tour_id);
        $this->tourName = $data->name;
        $this->tourDesc = $data->description;
        $this->tourRegency = $data->regency->name;
        $this->tourProvince = $data->province->name;
        $this->tourHour = $data->office_hours;
        $this->tourAddress = $data->address;
        $this->lat = $data->latitude;
        $this->long = $data->longitude;
        $this->tourCategory = $data->category->name;
        $this->tourImage = $data->img_thumbnail;

    }
}
