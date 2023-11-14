<?php

namespace App\Http\Livewire\Student\Judul;

use App\Models\Judul;
use Livewire\Component;

class Create extends Component
{
    public $input_title;
    public $group_type;
    protected $listeners = [
        'refreshJudul' => '$refresh',
    ];
    public function store()
    {

        $validatedData = $this->validate(
            [
                'input_title' => 'required|string|max_words:2',
            ],
            [
                'input_title.max_words' => 'Judul tidak boleh lebih dari 20 kata !',
            ],
        );
        Judul::create([
            'title' => $this->input_title,
            "student_id" => session()->get('user_id')
        ]);
    
        $this->emit('refreshJudul');
        $this->emit('SwalSuccess', "Berhasil", 'Berhasil Membuat Judul !');
        $this->emit('onSuccessStore');
    }
    public function render()
    {
        return view('livewire.student.judul.create');
    }
}
