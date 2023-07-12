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
    public $discussions;
    protected $listeners = [
        'editDetailDiscussion',
        'refreshDataDiscussion' => '$refresh'
    ];
    public function mount($id)
    {
        $this->theses_id = $id;
        $this->discussions = Discussion::where('theses_id', $id)->get();
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
            "student_id" => session()->get('user_id'),
        ]);
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
