<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Helpers\AuthHelper;

class Sidebar extends Component
{
    public $thesis;

    public function getSidebar()
    {
        if(AuthHelper::isAdmin())
        {
            $this->thesis = Judul::select('juduls.id', 'wpjs_users.user_login', DB::raw('COUNT(materis.id) as materi_count'))
            ->leftJoin('materis', function ($join) {
                $join->on('juduls.id', '=', 'materis.theses_id')
                    ->where('materis.created_at', '>', DB::raw('juduls.last_seen'));
            })
            ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
            ->groupBy('juduls.id', 'wpjs_users.user_login')
            ->get();
        }
    }
    public function render()
    {
        $this->getSidebar();
        return view('livewire.component.sidebar');
    }
}
