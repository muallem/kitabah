<?php

namespace App\Http\Livewire\AdminThesis;

use Livewire\Component;

class Discussion extends Component
{
    public $thesis_id;
    public $chat;
    public $discussions;
    protected $listeners = [
        'refreshDiscussion' => '$refresh',
        'showDiscussion'
    ];

    public function showDiscussion($thesis_id){
        $this->thesis_id = $thesis_id;
        $this->discussions = Discussion::where('theses_id', $thesis_id)->get();

    }
    public function render()
    {
        if($this->thesis_id){
            $this->discussions = Discussion::where('theses_id', $this->thesis_id)->get();
        }
        return view('livewire.admin-thesis.discussion');
    }


}
