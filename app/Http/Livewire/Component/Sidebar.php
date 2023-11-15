<?php

namespace App\Http\Livewire\Component;

use App\Models\Judul;
use Livewire\Component;
use App\Helpers\AuthHelper;
use Illuminate\Support\Facades\DB;

class Sidebar extends Component
{
    public $thesis;

    
    public function getSidebar()
    {
        if(AuthHelper::isAdmin())
        {
            $this->thesis = Judul::select('juduls.id', 'juduls.group', 'wpjs_users.user_login', DB::raw('COUNT(materis.id) as materi_count'))
            ->leftJoin('materis', function ($join) {
                $join->on('juduls.student_id', '=', 'materis.student_id');
            })
            ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
            ->groupBy('juduls.id', 'juduls.group', 'wpjs_users.user_login')
            ->get();
        }
    }
    public function render()
    {
        $this->getSidebar();
        return view('livewire.component.sidebar');
    }
}
