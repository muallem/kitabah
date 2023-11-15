<?php

namespace App\Http\Livewire\Materi;

use App\Models\Materi;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Kuan extends Component
{
    use WithFileUploads;


    public $files = [];
    public $kode_materi;
    public $input_feedback;
    public $tab1;
    public $tab2;

    protected $listeners = [
        'setKodeMateri',
    ];
    public function mount()
    {
        $this->tab1 = 'kuan-bab_1_pendahuluan';
        $this->tab2 = 'kuan-bab_1_pendahuluan-latar_belakang';
        $this->kode_materi = 'kuan-bab_1_pendahuluan-latar_belakang';
    } 
    public function setKodeMateri($tab1, $tab2)
    {
        $this->tab1 = $tab1;
        $this->tab2 = $tab2;
        $this->kode_materi = $tab2;
    }
    public function store()
    {
        if ($this->files) {
            // Handle the uploaded files
            foreach ($this->files as $file) {
                // Process each uploaded photo
                $fileName = Str::random(20) . '.' . $file->getClientOriginalExtension();
                $originalName = $file->getClientOriginalName();
                $filePath = $file->storeAs('attachments', $fileName, 'public');


                Materi::create([
                    'student_file' => $originalName,
                    "kode_materi" => $this->kode_materi,
                    "student_id" => session()->get('user_id'),
                ]);
            }
        }

        // Reset the form fields
        $this->reset(['files', 'input_feedback']);
        $this->emit('onSuccessSweetAlert', 'Berhasil Mengirim Data !');
    }
    public function render()
    {
        return view('livewire.materi.kuan');
    }
}
