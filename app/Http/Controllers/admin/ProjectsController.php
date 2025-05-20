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
        $projectInfo = new Projects();
        $projectInfo->project_name = $request->projectName;
        $projectInfo->project_description = $request->projectDescription;
        $projectInfo->project_type = $request->projectCategory;
        $projectInfo->project_features = $request->projectFeatures;
        $projectInfo->project_technics = $request->projectTechnologies;
        $projectInfo->project_status = $request->projectStatus;
        $projectInfo->project_url = $request->projectUrl;
        $projectInfo->project_start_date = $request->startDate;
        $projectInfo->project_end_date = $request->endDate;

        if ($projectInfo->save()) {
            return back()->with('success', 'Project information saved successfully.');
        } else {
            return back()->with('error', 'Failed to save project information.');
        }
    }

    public function delete($id)
    {
        $project = Projects::find($id);
        if ($project) {
            $project->delete();
            return back()->with('success', 'Project deleted successfully.');
        } else {
            return back()->with('error', 'Project not found.');
        }
    }

public function update(Request $request, $id)
{
    $validated = $request->validate([
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

    $project = Projects::findOrFail($id);

    $isUpdated = $project->update([
        'project_name' => $validated['projectName'],
        'project_description' => $validated['projectDescription'],
        'project_type' => $validated['projectCategory'],
        'project_features' => $validated['projectFeatures'],
        'project_technics' => $validated['projectTechnologies'],
        'project_status' => $validated['projectStatus'],
        'project_url' => $validated['projectUrl'],
        'project_start_date' => $validated['startDate'],
        'project_end_date' => $validated['endDate'],
    ]);

    return $isUpdated
        ? back()->with('success', 'تم تحديث بيانات المشروع بنجاح.')
        : back()->with('error', 'فشل في تحديث بيانات المشروع.');
}


}
