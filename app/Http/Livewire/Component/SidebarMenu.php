<?php

namespace App\Http\Livewire\Component;

use App\Models\Judul;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Facades\DB;

class SidebarMenu extends Component
{
    public $thesis;

    public function mount()
    {
        $this->getSidebar();
    }

    public function refreshMenu()
    {
        $this->getSidebar();
    }

    public function getSidebar()
    {
        $this->thesis = [];
        if(AuthHelper::isAdmin())
        {
            $thesis = Judul::select('juduls.id', 'juduls.group', 'wpjs_users.user_login', DB::raw('COUNT(materi_feedback.id) as materi_count'))
            ->leftJoin('materi_feedback', function ($join) {
                $join->on('juduls.student_id', '=', 'materi_feedback.student_id')
                    ->whereNull('materi_feedback.feedback');
            })
            ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
            ->groupBy('juduls.id', 'juduls.group', 'wpjs_users.user_login')
            ->get()->toArray();
            $this->thesis = $thesis;
        }else{
            $this->thesis = Judul::where('student_id', session()->get('user_id'))->first();
        }
        $this->emit('consoleLog', $this->thesis);
    }
    public function render()
    {
        return view('livewire.component.sidebar-menu');
    }
}
