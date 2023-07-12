<?php

namespace App\Http\Livewire\Thesis;

use App\Models\Thesis;
use App\Traits\WithDatatable;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Data extends Component
{

    public $thesis;

    protected $listeners = ['refreshDataThesis' => '$refresh'];
    public function resetInput()
    {
    }
    
    public function render()
    {
        $student_id = session()->get('user_id');
        $this->thesis = Thesis::where("student_id", $student_id)->first();
        return view('livewire.thesis.data');
    }
}
