<?php

namespace App\Http\Livewire\AdminThesis;

use Livewire\Component;
use App\Models\Discussion as modelDiscussion;

class Discussion extends Component
{
    public $thesis_id;
    public $chat;
    public $discussions;
    protected $listeners = [
        'refreshDiscussion' => '$refresh',
    ];

    public function render()
    {
        if($this->thesis_id){
            $this->discussions = modelDiscussion::where('theses_id', $this->thesis_id)->get();
        }
        return view('livewire.admin-thesis.discussion');
    }


}
