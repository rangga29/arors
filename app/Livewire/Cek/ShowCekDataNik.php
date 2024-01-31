<?php

namespace App\Livewire\Cek;

use Livewire\Component;

class ShowCekDataNik extends Component
{
    public $newData;

    public function render()
    {
        return view('livewire.cek.show-cek-data-nik')->layout('frontend.layout');
    }

    public function mount($newData): void
    {
        $this->newData = $newData;
    }
}
