<?php

namespace App\Http\Livewire\Student\Judul;

use Livewire\Component;

class Create extends Component
{
    public $input_title;
    public function store()
    {

        $validatedData = $this->validate([
            'title' => 'required|string|max_words:2',
        ]);
        Thesis::create([
            'title' => $this->title,
            "student_id" => session()->get('user_id')
        ]);
    
        $this->emit('refreshData');
        $this->emit('SwalSuccess', "Berhasil", 'Berhasil Membuat Judul !');
        $this->emit('onSuccessStore');
    }
    public function render()
    {
        return view('livewire.student.judul.create');
    }
}
