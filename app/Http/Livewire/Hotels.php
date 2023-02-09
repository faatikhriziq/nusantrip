<?php

namespace App\Http\Livewire;

use App\Models\Hotel;
use Livewire\Component;

class Hotels extends Component
{
    public $search;
    public function render()
    {
        return view('hotel',[
            'hotels' => Hotel::with( 'province', 'regency')->orderBy('id', 'desc')->where('name', 'like', '%' . $this->search . '%')->paginate(8),
        ])->layout('layouts.user');
    }
}
