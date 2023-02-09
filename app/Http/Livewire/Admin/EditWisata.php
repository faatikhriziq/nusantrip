<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Province;
use App\Models\Regency;
use App\Models\Tours;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class EditWisata extends Component
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
        $oldImage,
        $description,
        $address,
        $office_hours,
        $oldProvince,
        $oldRegency,
        $oldProvinceId,
        $oldRegencyId,
        $regencies = null;
    public function render()
    {



        return view('admin.edit-wisata', [
                'provinces' => Province::all(),
                'categories' => Category::all()
            ]
        )->layout('layouts.admin');
    }

    public  function mount($tour_id){
        $oldData = Tours::with('category','province','regency')->find($tour_id);
        $this->idWisata = $oldData->id;
        $this->category_id = $oldData->category_id;
        $this->oldProvince = $oldData->province->name;
        $this->oldRegency = $oldData->regency->name;
        $this->oldProvinceId = $oldData->province->id;
        $this->oldRegencyId = $oldData->regency->id;
        $this->name = $oldData->name;
        $this->oldImage = $oldData->img_thumbnail;
        $this->description = $oldData->description;
        $this->address = $oldData->address;
        $this->office_hours = $oldData->office_hours;
        $this->lat = $oldData->latitude;
        $this->long = $oldData->longitude;
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

    public function update(){
        $data = Tours::find($this->idWisata);
        if ($this->img_thumbnail != null) {
            $dataOld = Tours::find($this->idWisata);
            Storage::delete($dataOld->img_thumbnail);
            $path = Storage::putFileAs('images', $this->img_thumbnail, now()->getTimestamp() . '.' . $this->img_thumbnail->getClientoriginalName());
            if ($this->selectedProvince == null) {
                $data = Tours::where('id', $this->idWisata)->update([
                    'regency_id' => $this->oldRegencyId,
                    'province_id' => $this->oldRegencyId,
                    'category_id' => $this->category_id,
                    'name' => $this->name,
                    'img_thumbnail' => $path,
                    'description' => $this->description,
                    'longitude' => $this->long,
                    'latitude' => $this->lat,
                    'address' => $this->address,
                    'office_hours' => $this->office_hours
                ]);
            }

        } else {
            $data->regency_id = $this->oldRegencyId;
            $data->province_id = $this->oldProvinceId;
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
            redirect()->to('/wisata')->with('success', 'Data Wisata berhasil Diupdate');
            $this->emit('saved');
            return;
        } else {
            redirect()->to('/wisata')->with('error', 'Data Wisata Gagal Diupdate');
            $this->emit('saved');
            return;
        }
    }
}
