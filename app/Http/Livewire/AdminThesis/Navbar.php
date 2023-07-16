<?php

namespace App\Http\Livewire\AdminThesis;

use App\Models\Thesis;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Navbar extends Component
{
    public $thesis;

    protected $listeners = [
        'refreshNavbar' => '$refresh',
    ];

    public function mount()
    {
        $this->thesis = Thesis::select('id', 'student_id')->with('user')->get();
    }
    
    public function render()
    {
        $this->thesis = Thesis::select('id', 'student_id')->with('user')->get();
        return view('livewire.admin-thesis.navbar');
    }
}
