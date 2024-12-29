<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use DB;
use App\Models\WorkExperience;
use App\Models\Career;
use App\Models\User;
use App\Models\Service;

use App\Models\Applicant;

use Illuminate\Support\Facades\Mail;
use App\Mail\ConfirmationMail;

class JobsController extends Controller
{

    public function index()
    {
        $careers = Career::get();
        return view('career', compact('careers'));
    }

    public function shows()
    {
        $careers = Career::paginate(12);
        return view('dm_jobs', compact('careers'));
    }

    public function Applicants()
    {
        $total_jobs = Career::count();
        $total_users = User::count();
        $total_services = Service::count();
        $total_applicants = DB::table('applicants')->count();
       $applicants=DB::table('applicants')
       ->join('work_experiences', 'applicants.id','=' ,'work_experiences.applicant_id')
       ->select('applicants.*')
       ->paginate(12);
        return view('applicants', compact('applicants', 'total_jobs', 'total_applicants', 'total_users', 'total_services'));
    }

    public function view()
    {
        $total_jobs = Career::count();
        $total_users = User::count();
        $total_services = Service::count();
        $total_applicants = DB::table('applicants')->count();
       $applicants=DB::table('applicants')
       ->join('work_experiences', 'applicants.id','=' ,'work_experiences.applicant_id')
       ->select('applicants.*', 'work_experiences.*')
       ->paginate(12);
        return view('dashboard_view', compact('applicants', 'total_jobs', 'total_applicants', 'total_users', 'total_services'));
    }

    public function applicants_details($id)
    {
        $career = DB::table('applicants')
        ->join('work_experiences', 'applicants.id','=' ,'work_experiences.applicant_id')
        ->where('applicants.id','=' , $id)
        ->select('applicants.*', 'work_experiences.*')->first();

        return view('applicants_details', compact('career'));
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
            'transcript' => 'required',
            'tazkira' => 'required',
            'job_titles.*' => 'nullable|string',
            'company_names.*' => 'nullable|string',
            'start_dates.*' => 'nullable|date',
            'end_dates.*' => 'nullable|date',
            'job_descriptions.*' => 'nullable|string',
        ]);


        // Save  files
        $cvPath = $request->file('cv')->store('public/assets/img/applications');
        $letterPath = $request->file('letters')->store('public/assets/img/applications');
        $diplomaPath = $request->file('diploma')->store('public/assets/img/applications');
        $transcriptPath = $request->file('transcript')->store('public/assets/img/applications');
        $tazkiraPath = $request->file('tazkira')->store('public/assets/img/applications');

        // Create Job instance
        $job = new Applicant;
        $lastJob = Applicant::latest('id')->first();
        $job->id = $lastJob ? $lastJob->id + 1 : 10000;  // Increment ID, starting from 1000 if no jobs exist
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
        $job->transcript = $transcriptPath;
        $job->tazkira = $tazkiraPath;
        $applicantId = $job->id;  // Get the dynamic applicant ID

        $job->save(); // Save the job first to get its ID

        // Save WorkExperiences if provided
        if ($request->has('job_titles')) {
            $workExperiences = [];
            foreach ($request->job_titles as $key => $jobTitle) {
                $workExperiences[] = new WorkExperience([
                    'job_id' => $request->job_id[$key],
                    'job_title' => $jobTitle,
                    'company_name' => $request->company_names[$key],
                    'start_date' => $request->start_dates[$key],
                    'end_date' => $request->end_dates[$key],
                    'job_description' => $request->job_descriptions[$key],
                    'applicant_id' =>$applicantId,

                ]);
            }
            $job->workExperiences()->saveMany($workExperiences); // Associate work experiences with the job
        }

        // Send confirmation email

        return back()->with('success', 'Your Application has been successfully send!');
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

    public function show_jobs($id)
    {
        $job = Career::find($id);
        return view('jobs', compact('job'));
    }

    public function edit(Request $request)
    {


        DB::begintransaction();
        try{
            $update =
            [
                'job_title'=>$request->job_title,
                'job_description'=>$request->job_description,
                'qualifications'=>$request->qualifications,
                'salary'=>$request->salary,
                'location'=>$request->location,
                'type'=>$request->type,
                'vacancy'=>$request->vacancy,
                'application_deadline'=>$request->application_deadline,
            ];
            DB::table('careers')->where('id', $request->id)->update($update);

            DB::commit();
            $careers = Career::paginate(12);
            return view('dm_jobs', compact('careers'));

        }catch(\Exception $e)
        {
            DB::rollback();
            $careers = Career::paginate(12);
            return view('dm_jobs', compact('careers'));
        }
    }
    public function edit_shows(Request $request, $id)
    {
        $job = Career::find($id);
        return view('jobs_edit', compact('job'));
    }

    public function destroy($id)
    {
        $job = Career::find($id)->delete();
        $careers = Career::paginate(12);
        return view('dm_jobs', compact('careers'));

    }
}
