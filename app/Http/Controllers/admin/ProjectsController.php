<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function create(Request $request)
    {
        // Validate the request data
       $projectInfo=new Projects();
        $projectInfo->project_name = $request->projectName;
        $projectInfo->project_description = $request->projectDescription;
        $projectInfo->project_type = $request->projectCategory;
        $projectInfo->project_features = $request->projectFeatures;
        $projectInfo->project_technics = $request->projectTechnologies;
        $projectInfo->project_status = $request->projectStatus;
        $projectInfo->project_url = $request->projectUrl;
        $projectInfo->project_start_date = $request->startDate;
        $projectInfo->project_end_date = $request->endDate;

        if($projectInfo->save())
        {
            return back()->with('success', 'Project information saved successfully.');
        }
        else
            {
            return back()->with('error', 'Failed to save project information.');
            }
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'projectName' => 'required',
            'projectDescription' => 'required',
            'projectCategory' => 'required',
            'projectFeatures' => 'required',
            'projectTechnologies' => 'required',
            'projectStatus' => 'required',
            'projectUrl' => 'required',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
        ]);

        // Find the project by ID
        $project = Projects::find($id);

        if ($project) {
            // Update the project details
            $project->update($request->all());
            return back()->with('success', 'Project updated successfully.');
        } else {
            return back()->with('error', 'Project not found.');
        }
    }

    public function delete($id){
        $project=Projects::find($id);
        if($project){
            $project->delete();
            return back()->with('success', 'Project deleted successfully.');
        }
        else{
            return back()->with('error', 'Project not found.');
        }
    }
}
