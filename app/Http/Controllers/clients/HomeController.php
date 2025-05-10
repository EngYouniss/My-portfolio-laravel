<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\PersonalInformation;
use App\Models\Projects;
use App\Models\Skills;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $personalInfo=PersonalInformation::latest()->first();
        $skills=Skills::get();
        $projectsInfo=Projects::get();
        $educationInfo=Education::get();
        $educationDesc=Education::latest()->first();
        return view('clients.clients_home',compact('skills','projectsInfo','personalInfo','educationInfo','educationDesc'));
    }
}
