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
        'showDiscussion',
        'resetAdminDiscussion',
    ];

    public function showDiscussion($id){
        $this->thesis_id = $id;
        $this->emit('showChat', ['id' => $id]);
    }

    public function resetAdminDiscussion(){
        $this->reset(['thesis_id', 'chat']);
    }
    public function render()
    {
        return view('livewire.admin-thesis.discussion');
    }


}
