<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('admin.dashboard')->layout('layouts.admin');
    }
}
