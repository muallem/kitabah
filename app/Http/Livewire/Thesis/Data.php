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
    protected $listeners = [
        'addFilter',
        'getColumns',
        'refreshDatatable' => '$refresh',
    ];

    public function onMount()
    {
        $this->thesis = Thesis::where("student_id", session()->get('user_id'))->first();
    }

    
    public function render()
    {
        return view('livewire.thesis.data');
    }
}
