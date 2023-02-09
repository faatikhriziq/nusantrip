<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreateCategoryTourForm extends Component
{
    use WithFileUploads;
    public   $idCateogry,$name,$image,$oldImages;




    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'name' => 'min:3',
            'image' => 'image'
        ]);
    }


    public function render()
    {
        return view('livewire.admin.create-category-tour-form');
    }



    // public function store()
    // {

    //     $this->validate([
    //         'name' => 'required|min:3',
    //         'image' =>'required|image'
    //     ]);

    //   $path = Storage::putFileAs('images',$this->image,now()->getTimestamp().'.'.$this->image->getClientoriginalName());


    //    Category::create([
    //     'name'=> $this->name,
    //     'image'=> $path
    //    ]);

    //    session()->flash('success', 'Post successfully updated.');

    // }

}
