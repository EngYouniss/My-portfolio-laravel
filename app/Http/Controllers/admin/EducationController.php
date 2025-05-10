<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
   
    public function create(Request $request)
    {
        // Validate the request data
        $request->validate([
            'degree' => 'required',
            'university' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        // Create a new education record
        $education =new Education();
        $education->degree = $request->degree;
        $education->field = $request->field;
        $education->university = $request->university;
        $education->start_date = $request->start_date;
        $education->end_date = $request->end_date;
        $education->description = $request->description;
        $education->focus_study = $request->focus_study;
        $education->location = $request->location;
        $education->grade = $request->grade;


        if ($education->save()) {
            return back()->with('success', 'Education information saved successfully.');
        } else {
            return back()->with('error', 'Failed to save education information.');
        }
    }
}
