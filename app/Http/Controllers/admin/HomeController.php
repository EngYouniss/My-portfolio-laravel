<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Models\Messages;
use Illuminate\Http\Request;
use App\Models\PersonalInformation;
use App\Models\Projects;
use App\Models\Skills;

class HomeController extends Controller
{
    public function index()
    {
        $skills = Skills::get();
        $projectsInfo = Projects::get();
        $personalInfo = PersonalInformation::latest()->first();
        $educationInfo = Education::get();
        $allMessages = Messages::get();
        $messageInfo = Messages::latest()->limit(3)->get();

        return view('admin.admin_home')->with([
            'skills' => $skills,
            'personalInfo' => $personalInfo,
            'projectsInfo' => $projectsInfo,
            'educationInformation' => $educationInfo,
            'messageInfo' => $messageInfo,
            'allMessages' => $allMessages,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'fullName' => 'required',
        ], [
            'fullName.required' => 'الاسم الكامل مطلوب'

        ]);
        $personalInfo = new PersonalInformation();
        $personalInfo->name = $request->fullName;
        $personalInfo->age = $request->age;
        $personalInfo->birthdate = $request->birthDate;
        $personalInfo->phone_number = $request->phoneNumber;
        $personalInfo->email = $request->email;
        $personalInfo->address = $request->address;
        $personalInfo->city = $request->city;
        $personalInfo->country = $request->contry;
if ($request->hasFile('image')) {
    $personalInfo->image = $this->UploadImage($request->file('image'));
}

        $personalInfo->about_me = $request->aboutMe;
        $personalInfo->job_title = $request->jobTitle;

        // التعامل مع رفع السيرة الذاتية
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cv_files');
            $personalInfo->cv = $cvPath;
        }
        $personalInfo->x_url = $request->x;
        $personalInfo->github_url = $request->github;
        $personalInfo->linkedin = $request->linkedin;
        if ($personalInfo->save()) {
            return back()->with('success', 'Personal information saved successfully.');
        } else {
            return back()->with('error', 'Failed to save personal information.');
        }
    }

    public function UploadImage($image)
    {
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('/images'), $imageName);
        return $imageName;
    }
    public function UploadCV($cv)
    {
        $cvName = uniqid() . '.' . $cv->getClientOriginalExtension();
        $cv->storeAs('cv_files', $cvName); // يخزن داخل storage/app/cv_files
        return 'cv_files/' . $cvName;
    }



   public function update(Request $request)
{
    // جلب أول سجل من الجدول
    $personalInfo = PersonalInformation::latest()->first();

    if (!$personalInfo) {
        return back()->with('error', 'No record found to update.');
    }

    // التحقق من صحة البيانات المدخلة
    $validated = $request->validate([
        'fullName'    => 'required|string|max:255',
        'jobTitle'    => 'nullable|string|max:255',
        'email'       => 'required|email|max:255',
        'phoneNumber' => 'nullable|string|max:20',
        'address'     => 'nullable|string|max:255',
        'city'        => 'nullable|string|max:100',
        'country'     => 'nullable|string|max:100',
        'age'         => 'nullable|integer|min:0',
        'birthDate'   => 'nullable|date',
        'aboutMe'     => 'nullable|string',
        'x'           => 'nullable|string|max:255',
        'github'      => 'nullable|string|max:255',
        'linkedin'    => 'nullable|string|max:255',
        'cv'          => 'nullable|file|mimes:pdf,doc,docx|max:10240', // max 10MB
        'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // max 2MB
    ]);

    // إذا تم رفع صورة جديدة، قم بمعالجتها
    if ($request->hasFile('image')) {
        $imageName = $this->UploadImage($request->file('image'));
        $personalInfo->image = $imageName;
    }

    // تحديث بيانات السجل
    $personalInfo->name         = $validated['fullName'];
    $personalInfo->job_title    = $validated['jobTitle'];
    $personalInfo->email        = $validated['email'];
    $personalInfo->phone_number = $validated['phoneNumber'];
    $personalInfo->address      = $validated['address'];
    $personalInfo->city         = $validated['city'];
    $personalInfo->country      = $validated['country'];
    $personalInfo->age          = $validated['age'];
    $personalInfo->birthdate    = $validated['birthDate'];
    $personalInfo->about_me     = $validated['aboutMe'];
    $personalInfo->x_url        = $validated['x'];
    $personalInfo->github_url   = $validated['github'];
    $personalInfo->linkedin     = $validated['linkedin'];

    // حفظ التحديثات
    $personalInfo->save();

    // إذا تم إرسال ملف السيرة الذاتية (CV)، قم بتخزينه وتحديث المسار
    if ($request->hasFile('cv')) {
        $cvPath = $request->file('cv')->store('cv_files');
        $personalInfo->cv = $cvPath;
        $personalInfo->save();
    }

    return back()->with('success', 'Data updated successfully.');
}

}
