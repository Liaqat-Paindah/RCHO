<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\WorkExperience;
use App\Models\CandidateReference;
use App\Models\Career;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;

class JobsController extends Controller
{

    public function index()
    {
        $careers = Career::get();
        return view('career', compact('careers'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|min:5',
            'dob' => 'required',
            'gender' => 'required',
            'nid' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'province' => 'required',
            'city' => 'required',
            'district' => 'required',
            'degree' => 'required',
            'major' => 'required',
            'graduation' => 'required',
            'grade' => 'required',
            'experience' => 'required',
            'cv' => 'required',
            'letters' => 'required',
            'diploma' => 'required',
            'tazkira' => 'required',
            'job_titles.*' => 'nullable|string',
            'company_names.*' => 'nullable|string',
            'start_dates.*' => 'nullable|date',
            'end_dates.*' => 'nullable|date',
            'job_descriptions.*' => 'nullable|string',
            'reference_name.*' => 'required|string',
            'reference_type.*' => 'required|string',
            'relationship.*' => 'required|string',
            'organization.*' => 'required|string',
            'reference_email.*' => 'required|string',
            'reference_phone.*' => 'required|string',
            'position.*' => 'required|string',
            'association_start.*' => 'required',
            'association_end.*' => 'required',
            'perspective.*' => 'required',

        ]);

        // Save  files
        $cvPath = $request->file('cv')->store('public\assets\img\applications');
        $letterPath = $request->file('letters')->store('public\assets\img\applications');
        $diplomaPath = $request->file('diploma')->store('public\assets\img\applications');
        $tazkiraPath = $request->file('tazkira')->store('public\assets\img\applications');

        // Create Job instance
        $job = new Job;
        $job->fullname = $request->input('fullname');
        $job->dob = $request->input('dob');
        $job->gender = $request->input('gender');
        $job->nid = $request->input('nid');
        $job->email = $request->input('email');
        $job->phone = $request->input('phone');
        $job->province = $request->input('province');
        $job->city = $request->input('city');
        $job->district = $request->input('district');
        $job->degree = $request->input('degree');
        $job->major = $request->input('major');
        $job->graduation = $request->input('graduation');
        $job->grade = $request->input('grade');
        $job->experience = $request->input('experience');
        $job->cv = $cvPath;
        $job->letters = $letterPath;
        $job->diploma = $diplomaPath;
        $job->tazkira = $tazkiraPath;


        $job->save(); // Save the job first to get its ID

        // Save WorkExperiences if provided
        if ($request->filled('job_titles')) {
            $workExperiences = [];
            foreach ($request->job_titles as $key => $jobTitle) {
                $workExperiences[] = new WorkExperience([
                    'job_title' => $jobTitle,
                    'company_name' => $request->company_names[$key],
                    'start_date' => $request->start_dates[$key],
                    'end_date' => $request->end_dates[$key],
                    'job_description' => $request->job_descriptions[$key],
                ]);
            }
            $job->workExperiences()->saveMany($workExperiences); // Associate work experiences with the job
        }

        // Save CandidateReferences if provided
        if ($request->filled('reference_name')) {
            $references = [];
            foreach ($request->reference_name as $key => $referenceName) {
                $references[] = new CandidateReference([
                    'job_id' => $job->id,
                    'reference_name' => $referenceName,
                    'reference_type' => $request->reference_type[$key],
                    'relationship' => $request->relationship[$key],
                    'organization' => $request->organization[$key],
                    'email' => $request->reference_email[$key],
                    'phone' => $request->reference_phone[$key],
                    'position' => $request->position[$key],
                    'association_start' => $request->association_start[$key],
                    'association_end' => $request->association_end[$key],
                    'perspective' => $request->perspective[$key],
        
                ]);
            }
            $job->references()->saveMany($references); // Save all references associated with the job
        }


        // Send confirmation email
        Mail::to($request->input('email'))->send(new ConfirmationMail());

        return back()->with('success', 'Your Application has been successfully Send');
    }

    public function details($id)
    {
        $careers = Career::find($id);
        return view('job-details', compact('careers'));
    }

    public function Show_details()
    {
        return view('job-details');
    }
}
