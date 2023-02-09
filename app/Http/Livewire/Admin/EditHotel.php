<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Province;
use App\Models\Regency;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditHotel extends Component
{
    use WithFileUploads;
    public $selectedProvince = null,
        $selectedRegency = null,
        $oldProvince,
        $oldRegency,
        $oldImage,
        $img_thumbnail,
        $long,
        $lat,
        $name,
        $description,
        $address,
        $price,
        $regencies = null;
    public function render()
    {
        return view('admin.edit-hotel', [
            'provinces' => Province::all(),
            'categories' => Category::all(),
        ])->layout('layouts.admin');
    }
    public function updatedselectedProvince($province_id)
    {
        $this->regencies = Regency::where('province_id', $province_id)->get();
    }


    public function mount($hotel_id){
        $oldData = Hotel::with('province','regency')->find($hotel_id)->get();
        $this->oldProvince = $oldData->province;
        $this->oldRegency = $oldData->regency;
        $this->oldImage = $oldData->img_thumbnail;
        $this->name = $oldData->name;
        $this->description = $oldData->description;
        $this->address = $oldData->address;
        $this->lat = $oldData->lat;
        $this->long = $oldData->long;
        $this->price = $oldData->price;
        $this->img_thumbnail = $oldData->img_thumbnail;

    }

    public function dehydrate()
    {
        $this->dispatchBrowserEvent('reloadJs');
    }
}
