<?php

namespace App\Http\Livewire\Discussion;

use Livewire\Component;
use App\Models\Discussion;

class Chat extends Component
{

    public $detailId;
    public $theses_id;
    public $chat;
    public $discussions;
    protected $listeners = [
        'editDetailChat',
        'showChat',
        'refreshDataChat' => '$refresh'
    ];
    public function mount($id)
    {
        $this->theses_id = $id;
        $this->discussions = Discussion::where('theses_id', $id)->get();
    }

    public function showChat($thesis_id){
        $this->theses_id = $thesis_id;
        $this->discussions = Discussion::where('theses_id', $thesis_id)->get();
        $this->emit('chatToBottom');
    }

    public function render()
    {
        $this->discussions = Discussion::where('theses_id', $this->theses_id)->get();
        return view('livewire.discussion.chat');
    }

    public function store()
    {
        $validatedData = $this->validate([
            'chat' => ['required'],
        ]);
        Discussion::create([
            'chat' => $this->chat,
            'theses_id' => $this->theses_id,
            "is_admin" => (session()->get('user_role') === 'admin') ? true : false,
        ]);
        $this->chat = "";
    }
    public function resetInput()
    {
        $this->detailId = '';
        $this->chat = '';
    }
    public function editDetailChat($id)
    {
        $detail = Discussion::find($id);
        if ($detail) {
            $this->detailId = $detail->id;
            $this->chat = $detail->chat;
        }

        $this->emit('onEditing');
    }
}
