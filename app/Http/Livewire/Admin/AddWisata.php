<?php

namespace App\Http\Livewire\Admin;

use App\Models\Tours;
use App\Models\Regency;
use Livewire\Component;
use App\Models\Category;
use App\Models\Province;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class AddWisata extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $long,
    $idWisata,
    $lat,
    $selectedProvince = null,
    $selectedRegency = null,
    $category_id,
    $name,
    $img_thumbnail,
    $description,
    $address,
    $office_hours,


    $regencies = null;

    public function render()
    {
        $this->dispatchBrowserEvent('contentChanged');
        return view('admin.add-wisata', [
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
            'office_hours' => 'min:5',
        ]);
    }

    public function refresh(){
        $this->dispatchBrowserEvent('contentChanged');
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
            'office_hours' => 'min:5|required',
        ]);

        $path = Storage::putFileAs('images', $this->img_thumbnail, now()->getTimestamp() . '.' . $this->img_thumbnail->getClientoriginalName());


        $data = Tours::create([
            'regency_id' => $this->selectedRegency,
            'province_id' => $this->selectedProvince,
            'category_id' => $this->category_id,
            'name' => $this->name,
            'img_thumbnail' => $path,
            'description' => $this->description,
            'longitude' => $this->long,
            'latitude' => $this->lat,
            'address' => $this->address,
            'office_hours' => $this->office_hours
        ]);

        if ($data) {
            redirect()->to('/wisata');
            $this->emit('alert_remove');
            session()->flash('success', 'Data Wisata berhasil Ditambahkan');
            return;
        } else {
            redirect()->to('/wisata');
            $this->emit('alert_remove');
            redirect()->to('/wisata')->with('error', 'Data Wisata Gagal Ditambahkan');
            return;
        }
    }

    public function update()
    {

        $this->validate([
            'name' => 'required|min:3',
            'description' => 'min:50|required',
            'long' => 'min:3|required',
            'lat' => 'min:3|required',
            'address' => 'min:10|required',
            'office_hours' => 'min:5|required',
        ]);

        $data = Tours::find($this->idWisata);
        if ($this->img_thumbnail != null) {
            $dataOld = Tours::find($this->idWisata);
            Storage::delete($dataOld->img_thumbnail);
            $path = Storage::putFileAs('images', $this->img_thumbnail, now()->getTimestamp() . '.' . $this->img_thumbnail->getClientoriginalName());
            $data = Tours::where('id', $this->idWisata)->update([
                'regency_id' => $this->selectedRegency,
                'province_id' => $this->selectedProvince,
                'category_id' => $this->category_id,
                'name' => $this->name,
                'img_thumbnail' => $path,
                'description' => $this->description,
                'longitude' => $this->long,
                'latitude' => $this->lat,
                'address' => $this->address,
                'office_hours' => $this->office_hours
            ]);
        } else {
            $data->regency_id = $this->selectedRegency;
            $data->province_id = $this->selectedProvince;
            $data->category_id = $this->category_id;
            $data->name = $this->name;
            $data->img_thumbnail = $this->oldImage;
            $data->description = $this->description;
            $data->longitude = $this->long;
            $data->latitude = $this->lat;
            $data->address = $this->address;
            $data->office_hours = $this->office_hours;
            $data->save();
        }

        if ($data) {
            $this->emit('alert_remove');
            redirect()->to('/wisata')->with('success', 'Data Wisata berhasil Diupdate');
            return;
        } else {
            $this->emit('alert_remove');
            redirect()->to('/wisata')->with('error', 'Data Wisata Gagal Diupdate');
            return;
        }
        $this->reset();
    }



}
