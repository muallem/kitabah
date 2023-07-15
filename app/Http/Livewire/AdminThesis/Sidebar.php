<?php

namespace App\Http\Livewire\AdminThesis;

use App\Models\Thesis;
use Livewire\Component;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class Sidebar extends Component
{
    public $thesis;

    protected $listeners = [
        'refreshSidebar' => '$refresh',
    ];

    public function mount()
    {
        $this->thesis = Thesis::select('id')->with('user')->get();
    }

    public function render()
    {
        return view('livewire.admin-thesis.sidebar');
    }
}
