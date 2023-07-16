<?php

namespace App\Http\Livewire\Discussion;

use App\Models\Discussion;
use Livewire\Component;
use Illuminate\Support\Str;

class Detail extends Component
{

    public $detailId;
    public $theses_id;
    public $chat;
    protected $listeners = [
        'editDetailDiscussion',
        'showDiscussion',
        'refreshDataDiscussion' => '$refresh'
    ];
    public function mount($id)
    {
        $this->theses_id = $id;
    }

    public function showDiscussion($theses_id){
        $this->theses_id = $theses_id;
    }

    public function render()
    {
        return view('livewire.discussion.detail');
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
            "is_file" => false
        ]);
        $this->chat = "";
        $this->emit('refreshDataChat');
        $this->emit('chatToBottom');
    }
    public function resetInput()
    {
        $this->detailId = '';
        $this->chat = '';
    }
    public function editDetailDiscussion($id)
    {
        $detail = Discussion::find($id);
        if ($detail) {
            $this->detailId = $detail->id;
            $this->chat = $detail->chat;
        }

        $this->emit('onEditing');
    }
}
