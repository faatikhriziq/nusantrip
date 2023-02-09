<?php

namespace App\Http\Livewire\Admin;


use App\Models\Regency;

use Livewire\Component;
use App\Models\Category;
use App\Models\Province;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class FormWisata extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $long,
    $lat,
    $selectedProvince = null,
    $selectedRegency = null,
    $regencies = null;
    public function render()
    {
        return view('livewire.admin.form-wisata',[
            'provinces' => Province::all(),
            'categories' => Category::all(),
        ])->layout('layouts.admin');
    }

public function updatedselectedProvince($province_id){
$this->regencies = Regency::where('province_id',$province_id)->get();
}

 public function refresh(){
    return;
 }

}
