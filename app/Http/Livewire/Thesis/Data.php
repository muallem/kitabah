<?php

namespace App\Http\Livewire\Thesis;

use App\Models\Thesis;
use App\Traits\WithDatatable;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Data extends Component
{

    public $thesis = "coba";
    protected $listeners = [
        'addFilter',
        'getColumns',
        'refreshDatatable' => '$refresh',
    ];

    public function onMount()
    {
        $student_id = session()->get('user_id');
        $this->thesis = Thesis::where("student_id", $student_id)->first();
    }

    
    public function render()
    {
        return view('livewire.thesis.data');
    }
}
