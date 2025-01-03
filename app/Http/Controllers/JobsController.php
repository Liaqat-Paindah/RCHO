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
       ->distinct('work_experiences.applicant_id')
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
        $job->job_id = $request->job_id;
        $job->save(); // Save the job first to get its ID
        $applicantId = $job->id;  // Get the dynamic applicant ID
        // Save WorkExperiences if provided
        if ($request->has('job_titles') && is_array($request->job_titles)) {
            $workExperiences = [];
            foreach ($request->job_titles as $key => $jobTitle) {
                // Validate and process only valid records
                if (!empty($jobTitle)) {
                    $workExperiences[] = [
                        'job_id' => $request->input("job_id")[$key] ?? null,
                        'job_title' => $jobTitle,
                        'company_name' => $request->input("company_names")[$key] ?? null,
                        'start_date' => $request->input("start_dates")[$key] ?? null,
                        'end_date' => $request->input("end_dates")[$key] ?? null,
                        'job_description' => $request->input("job_descriptions")[$key] ?? null,
                        'applicant_id' => $applicantId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ];
                }
            }

            // Save all experiences in bulk
            if (!empty($workExperiences)) {
                WorkExperience::insert($workExperiences);
            }
        }

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
    public function Job_Details($id)
    {
        $career = DB::table('careers')
        ->where('careers.id','=' , $id)
        ->select('careers.*')->first();
        return view('jobs_desc', compact('career'));
    }

    public function saveRecord()
    {
        return view('new_jobs');
    }

    public function saveJobs(Request $request)
    {

        DB::beginTransaction();
        try {
            $career= new Career();
            $career->job_title = $request->job_title;
            $career->job_description = $request->job_description;
            $career->qualifications  = $request->qualifications;
            $career->salary = $request->salary;
            $career->location  = $request->location;
            $career->type  = $request->type;
            $career->vacancy  = $request->vacancy;
            $career->application_deadline  = $request->application_deadline;
            $career->save();
            DB::commit();
            return redirect('dm_jobs');
        } catch(\Exception $e) {
            DB::rollback();
            return redirect()->back();
        }

    }

    public function job_applicants($id)
    {
        $total_jobs = Career::count();
        $total_users = User::count();
        $total_services = Service::count();
        $total_applicants = DB::table('applicants')->count();
       $applicants=DB::table('applicants')
       ->join('work_experiences', 'applicants.id','=' ,'work_experiences.applicant_id')
        ->where('applicants.job_id','=', $id)
       ->select('applicants.*', 'work_experiences.applicant_id')
       ->distinct('work_experiences.applicant_id')
       ->paginate(12);
       return view('job_applicants', compact('applicants', 'total_jobs', 'total_users', 'total_services', 'total_applicants'));
    }

}
