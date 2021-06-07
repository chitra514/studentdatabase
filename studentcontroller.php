<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\state;
use App\Models\student;
use Illuminate\Support\Facades\DB;

class studentcontroller extends Controller
{

    public function create()
    {
        $data= state::where('status','active')->get();
        return view('studentform', compact('data'));
      
    }
    public function index()
    {
        return view('stateform');
    }
    public function save(Request $req)
    {
        $state= new state;
        $state->statename=$req->statename;
        $state->status=$req->status;
        $state->save();
    }
    public function store(Request $req)
    {
        $student = new student;
        $student->studname= $req->studname;
        $student->mobnum=$req->mobnum;
       $student->state_id=$req->state_id;
        $student->status=$req->status;
        $student->save();
    }
    public function show()
    {
        return DB::table('students')
    ->join('states','states.id','=','students.state_id')
    ->select('students.*','states.statename')->where('students.status','active')->get();
    }
}



