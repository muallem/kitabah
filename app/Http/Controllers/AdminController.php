<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Thesis;
use App\Helpers\AuthHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Judul::select('juduls.id', 'juduls.group', 'wpjs_users.user_login', DB::raw('COUNT(materis.id) as materi_count'))
        ->leftJoin('materis', function ($join) {
            $join->on('juduls.student_id', '=', 'materis.student_id')
                ->where('materis.created_at', '>', DB::raw('juduls.last_seen'));
        })
        ->leftJoin('wpjs_users', 'juduls.student_id', '=', 'wpjs_users.id')
        ->get();
        return $data;
        return view('admin.index');
    }
    public function kual()
    {
        return view('student.kual');
    }
    public function kuan()
    {
        return view('student.kuan');
    }
    public function rnd()
    {
        return view('student.rnd');
    }
    public function student()
    {
        return view('student.index');
    }
    public function coba(){
        return Thesis::select('id', 'title', 'group', 'student_id')->with('user')->get();
    }
    public function get_session(){
        $allData = Session::all();
        $data = [];

        // Loop through the session data
        foreach ($allData as $key => $value) {
            // Access individual session items
            $data[] = "Key: $key, Value: " . json_encode($value);
        }

        return $data;
    }
}
