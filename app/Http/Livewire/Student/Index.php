<?php

namespace App\Http\Livewire\Student;

use App\Models\Judul;
use Livewire\Component;

class Index extends Component
{
    public $data_judul;

    public function mount()
    {
        $student_id = session()->get('user_id');
        $this->data_judul = Judul::where('student_id', $student_id)->first();
    }
    public function render()
    {
        return view('livewire.student.index');
    }
}
