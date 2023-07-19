<?php

namespace App\Http\Livewire\Discussion;

use Livewire\Component;
use App\Models\Discussion;
use App\Models\Thesis;
use Carbon\Carbon;

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
        if (session()->get('user_role') === 'admin' && $id){
            $theses = Thesis::where('id', $id)->first();
            $theses->last_seen = Carbon::now();
            $theses->save();
        }
    }

    public function showChat($id){
        $this->theses_id = $id;
        $this->discussions = Discussion::where('theses_id', $id)->get();
        if (session()->get('user_role') === 'admin' && $id){
            $theses = Thesis::where('id', $id)->first();
            $theses->last_seen = Carbon::now();
            $theses->save();
        }
        return view('livewire.discussion.chat');
    }

    public function render()
    {
        $this->discussions = Discussion::where('theses_id', $this->theses_id)->get();
        if (session()->get('user_role') === 'admin' && $this->theses_id){
            $theses = Thesis::where('id', $this->theses_id)->first();
            $theses->last_seen = Carbon::now();
            $theses->save();
        }
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
