<?php

namespace App\Http\Livewire\AdminThesis;

use App\Models\Thesis;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class Navbar extends Component
{
    public $thesis;

    protected $listeners = [
        'refreshNavbar' => '$refresh',
    ];

    public function mount()
    {
        // $this->thesis = Thesis::select('id', 'student_id')->with('user')->get();
        $this->thesis = Thesis::select('theses.id', 'users.user_login', DB::raw('COUNT(discussions.id) as discussion_count'))
        ->leftJoin('discussions', function ($join) {
            $join->on('theses.id', '=', 'discussions.theses_id')
                ->where('discussions.created_at', '>', DB::raw('theses.last_seen'));
        })
        ->leftJoin('users', 'theses.student_id', '=', 'users.id')
        ->groupBy('theses.id', 'users.user_login')
        ->get();
    }
    
    public function render()
    {
        // $this->thesis = Thesis::select('id', 'student_id')->with('user')->get();
        $this->thesis = Thesis::select('theses.id', 'users.user_login', DB::raw('COUNT(discussions.id) as discussion_count'))
        ->leftJoin('discussions', function ($join) {
            $join->on('theses.id', '=', 'discussions.theses_id')
                ->where('discussions.created_at', '>', DB::raw('theses.last_seen'));
        })
        ->leftJoin('users', 'theses.student_id', '=', 'users.id')
        ->groupBy('theses.id', 'users.user_login')
        ->get();
    
        return view('livewire.admin-thesis.navbar');
    }
}
