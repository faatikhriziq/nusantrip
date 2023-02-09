<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class KategoriWisata extends Component
{
    use WithFileUploads;
    use WithPagination;
    public  $idCateogry,$name,$image,$oldImage, $form = false,$editMode =false , $search ='' ;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('admin.kategori-wisata',[
            'categories' => Category::orderBy('id','desc')->where('name','like','%'.$this->search.'%')->paginate(2),

        ])->layout('layouts.admin');
    }
    //Mereset Pagination filtering
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName,[
            'name' => 'min:3',
            'image' => 'image'
        ]);
    }
    public function closeForm(){
        $this->form = false;
        $this->reset();
    }
    public function showForm(){
        $this->form = true;
    }
    public function store()
    {

        $this->validate([
            'name' => 'required|min:3',
            'image' =>'required|image'
        ]);

      $path = Storage::putFileAs('images',$this->image,now()->getTimestamp().'.'.$this->image->getClientoriginalName());


      $data = Category::create([
        'name'=> $this->name,
        'image'=> $path
       ]);

       if($data){
        $this->closeForm();
        return session()->flash('success', 'Data Kategori berhasil itambahkan');
        $this->emit('alert_remove');
        return ;
    }else{
        return session()->flash('error', 'Post successfully updated.');
        $this->emit('alert_remove');
        return ;
       }
       $this->reset();


    }
    public function showUpdateform($id){
      $oldData = Category::find($id);
        $this->idCateogry = $oldData->id;
        $this->name = $oldData->name;
        $this->oldImage = $oldData->image;
        $this->editMode = true;
    }
    public function update()
    {

        $this->validate([
            'name' => 'required|min:3',
        ]);

        $data = Category::find($this->idCateogry);
        if($this->image != null){
            $dataOld = Category::find($this->idCateogry);
            Storage::delete($dataOld->image);
            $path = Storage::putFileAs('images',$this->image,now()->getTimestamp().'.'.$this->image->getClientoriginalName());
            $data = Category::where('id',$this->idCateogry)->update([
              'name'=> $this->name,
              'image'=> $path
             ]);
        }else{

            $data->name = $this->name;
            $data->image  = $this->oldImage;
             $data->save();
        }


       if($data){
        $this->closeForm();
         session()->flash('success', 'Kategori berhasil Ditambahkan');
        $this->emit('alert_remove');
        return ;
       }else{
        session()->flash('error', 'Kategori Gagal Ditambahkan');
        $this->emit('alert_remove');
        return ;
       }
       $this->reset();


    }


    public function closeUpdateform(){
        $this->editMode = false;
        $this->reset();
    }

    public function delete($id){
        $data = Category::findOrfail($id);
        Storage::delete($data->image);
        $data->delete();
        $this->reset();
    }







}
