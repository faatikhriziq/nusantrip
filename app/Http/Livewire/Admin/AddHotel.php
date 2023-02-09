<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Hotel;


class AddHotel extends Component
{
    use WithFileUploads;
    public $selectedProvince = null,
        $selectedRegency = null,
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
        return view('admin.add-hotel', [
            'provinces' => Province::all(),
            'categories' => Category::all(),
        ])->layout('layouts.admin');
    }

    public function updatedselectedProvince($province_id)
    {
        $this->regencies = Regency::where('province_id', $province_id)->get();
    }


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'min:3',
            'img_thumbnail' => 'image',
            'description' => 'min:50',
            'long' => 'min:3',
            'lat' => 'min:3',
            'address' => 'min:10',
            'price' => 'min:6',
        ]);
    }

    public function store()
    {

        $this->validate([
            'name' => 'required|min:3',
            'img_thumbnail' => 'image|required',
            'description' => 'min:50|required',
            'long' => 'min:3|required',
            'lat' => 'min:3|required',
            'address' => 'min:10|required',
            'price' =>'min:6|required',
        ]);

        $path = Storage::putFileAs('images', $this->img_thumbnail, now()->getTimestamp() . '.' . $this->img_thumbnail->getClientoriginalName());


        $data = Hotel::create([
            'regency_id' => $this->selectedRegency,
            'province_id' => $this->selectedProvince,
            'name' => $this->name,
            'img_thumbnail' => $path,
            'description' => $this->description,
            'longitude' => $this->long,
            'latitude' => $this->lat,
            'address' => $this->address,
            'price' => $this->price,
        ]);

        if ($data) {
            redirect()->to('/hotel');
            $this->emit('alert_remove');
            session()->flash('success', 'Hotel berhasil Ditambahkan');
            return;
        } else {
            $this->emit('alert_remove');
            redirect()->to('/hotel')->with('error', 'Hotel Gagal Ditambahkan');
            return;
        }
    }
}
