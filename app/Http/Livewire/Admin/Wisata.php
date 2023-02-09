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

class Wisata extends Component
{
    use WithFileUploads;
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';

    public function render()
    {

        return view('admin.wisata', [
                    'provinces' => Province::all(),
                    'categories' => Category::all(),
                    'tours' => Tours::with('category', 'province', 'regency')->orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(5),

                ])->layout('layouts.admin');
    }
    //Mereset Pagination filtering
    public function updatingSearch()
    {
        $this->resetPage();
    }



    public function delete($id)
    {
        $data = Tours::findOrfail($id);
        Storage::delete($data->img_thumbnail);
        $data->delete();
        $this->reset();
    }




}
