<?php

namespace App\Livewire\Cek;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class ShowCekDataNik extends Component
{
    public $newData;

    public function render()
    {
        View::share('type', 'cek');
        return view('livewire.cek.show-cek-data-nik')->layout('frontend.layout');
    }

    public function mount($newData): void
    {
        $this->newData = $newData;
    }
}
