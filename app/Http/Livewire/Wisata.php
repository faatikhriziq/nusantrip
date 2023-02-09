<?php

namespace App\Http\Livewire;

use App\Models\Tours;
use Livewire\Component;

class Wisata extends Component
{
    public $search;
    public function render()
    {
        return view('wisata',[
            'tours' => Tours::with('category', 'province', 'regency')->orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(8),
        ])->layout('layouts.user');
    }
}
