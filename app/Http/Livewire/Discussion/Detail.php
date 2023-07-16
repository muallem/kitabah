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
    public $files = [];
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
    public function triggerFileInputClick()
    {
        $this->emit('openFileInput');
    }

    public function render()
    {
        return view('livewire.discussion.detail');
    }

    public function store()
    {
        if ($this->files) {
            // Handle the uploaded files
            foreach ($this->files as $file) {
                // Process each uploaded photo
                $fileName = Str::random(16) . '.' . $file->getClientOriginalExtension();
                $originalName = $file->getClientOriginalName();
                $filePath = $file->storeAs('attachments', $fileName, 'public');


                Discussion::create([
                    'chat' => $originalName,
                    'theses_id' => $this->theses_id,
                    "is_admin" => (session()->get('user_role') === 'admin') ? true : false,
                    "is_file" => true,
                    'file' => $fileName
                ]);
            }
        }

        if ($this->chat) {
            // Handle the input text
            // Access the text input via $this->textInput
            $validatedData = $this->validate([
                'chat' => ['required'],
            ]);
            Discussion::create([
                'chat' => $this->chat,
                'theses_id' => $this->theses_id,
                "is_admin" => (session()->get('user_role') === 'admin') ? true : false,
                "is_file" => false
            ]);
        }

        // Reset the form fields
        $this->reset(['files', 'chat']);
        $this->emit('refreshDataChat');
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
