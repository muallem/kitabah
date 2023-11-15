<?php

namespace App\Http\Livewire\Materi;

use Livewire\Component;

class Kuan extends Component
{
    public $kode_materi;

    protected $listeners = [
        'setKodeMateri',
    ];
    public function mount()
    {
        $this->kode_materi = 'kuan-bab_1_pendahuluan-latar_belakang';
    } 
    public function setKodeMateri($value)
    {
        $this->kode_materi = $value;
    }
    public function render()
    {
        return view('livewire.materi.kuan');
    }
}
