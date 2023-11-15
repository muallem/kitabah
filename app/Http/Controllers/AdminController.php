<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Judul;
use App\Models\Materi;
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
        $materi = Materi::where('student_id', session()->get('user_id'))->get();
        $data = $materi->groupBy('kode_materi');
        return $data;
        return view('student.rnd');
    }
    public function student()
    {
        return view('student.index');
    }

    public function judul(Request $request)
    {
        return view('admin.judul', [
            'thesis_id' => $request->thesis_id,
        ]);
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
