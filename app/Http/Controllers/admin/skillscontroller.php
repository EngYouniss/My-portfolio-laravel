<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;

class skillscontroller extends Controller
{
    public function index()
    {
        // Retrieve all skills from the database
        $skills = Skills::get();

        return view('admin.admin_home')->with('skills', $skills);
    }

public function create(Request $request)
{
    // Validate the request data
   $skillInfo=new Skills();
    $skillInfo->skill_name = $request->skillName;
    $skillInfo->skill_level = $request->skillLevel;
    $skillInfo->skill_icon = $request->skillIcon;
    $skillInfo->skill_priority = $request->skillPriority;

    if($skillInfo->save())
    {
        return back()->with('success', 'Skill information saved successfully.');
    }
    else
        {
        return back()->with('error', 'Failed to save skill information.');
        }
}

    public function delete($id){
        $skills=Skills::find($id);
        if($skills){
            $skills->delete();
            return back()->with('success', 'Skill deleted successfully.');
        }else{
            return back()->with('error', 'Skill not found.');
        }

    }
    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'skillName' => 'required',
            'skillLevel' => 'required',
            'skillIcon' => 'required',
            'skillPriority' => 'required',
        ]);

        // Find the skill by ID
        $skill = Skills::find($id);

        if (!$skill) {
            return back()->with('error', 'Skill not found.');
        }
        
        // Update the skill information
        $skill->skill_name = $request->skillName;
        $skill->skill_level = $request->skillLevel;
        $skill->skill_icon = $request->skillIcon;
        $skill->skill_priority = $request->skillPriority;

        if ($skill->save()) {
            return back()->with('success', 'Skill updated successfully.');
        } else {
            return back()->with('error', 'Failed to update skill.');
        }
    }

}
