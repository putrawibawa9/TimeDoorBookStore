<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    public function index(){
        return view('volunteer.index', [
            'title' =>'Form Volunteer'
        ]);
    }

    public function store(Request $request){
       $validatedData = $request->validate([
            'name' => 'required',
            'nationality' => 'required',
            'volunteering_history' => 'required',
            'volunteering_start' => 'required',
            'volunteering_period' => 'required',
        ]);



        Volunteer::create($validatedData);

        return redirect('/view');
    }

    public function view(){
        return view('volunteer.view', [
            'title' =>'All Volunteer',
            'volunteer' => Volunteer::all()
        ]);
    }
}
