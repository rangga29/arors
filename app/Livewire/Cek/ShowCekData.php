<?php

namespace App\Livewire\Cek;

use Livewire\Component;

class ShowCekData extends Component
{
    public $umumData, $asuransiData, $fisioterapiData, $bpjsData;

    public function render()
    {
        return view('livewire.cek.show-cek-data')->layout('frontend.layout');
    }

    public function mount($umumData, $asuransiData, $bpjsData, $fisioterapiData): void
    {
        $this->umumData = $umumData;
        $this->asuransiData = $asuransiData;
        $this->bpjsData = $bpjsData;
        $this->fisioterapiData = $fisioterapiData;
    }
}
