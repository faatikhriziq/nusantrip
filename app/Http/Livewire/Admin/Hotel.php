<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Province;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class Hotel extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('admin.hotel',[
            'provinces' => Province::all(),
            'categories' => Category::all(),
            'hotels' => \App\Models\Hotel::with('province', 'regency')->orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5),
        ])->layout('layouts.admin');
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function delete($id)
    {
        $data = \App\Models\Hotel::findOrfail($id);
        Storage::delete($data->img_thumbnail);
        $data->delete();
        $this->reset();
    }

}
