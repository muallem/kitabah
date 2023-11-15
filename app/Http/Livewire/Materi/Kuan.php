<?php

namespace App\Http\Livewire\Materi;

use Livewire\Component;

class Kuan extends Component
{
    public $kode_materi;
    public $tab1;
    public $tab2;

    protected $listeners = [
        'setKodeMateri',
    ];
    public function mount()
    {
        $this->tab1 = 'kuan-bab_1_pendahuluan';
        $this->tab2 = 'kuan-bab_1_pendahuluan-latar_belakang';
        $this->kode_materi = 'kuan-bab_1_pendahuluan-latar_belakang';
    } 
    public function setKodeMateri($tab1, $tab2)
    {
        $this->tab1 = $tab1;
        $this->tab2 = $tab2;
        $this->kode_materi = $tab2;
    }
    public function render()
    {
        return view('livewire.materi.kuan');
    }
}
