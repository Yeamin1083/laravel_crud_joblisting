<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index(){
        $jobs=Job::with('employer')->latest()->simplePaginate(9);

        return view('jobs.index', [
            'jobs' => $jobs
        ]);
    }

    public function create(){
        if (Auth::guest()) {
            return redirect('/login');
        }

        return view('jobs.create');
    }

    public function show(Job $job){
        
        return view('jobs.show', ['job' => $job]);
    }

    public function store(){
        
     request()->validate([
        'title'=>['required', 'min:3'],
        'salary'=>['required']
             ]);
        
             $job=Job::create([
                'title'=>request('title'),
                'salary'=>request('salary'),
                'employer_id'=>1,


             ]);

             \Illuminate\Support\Facades\Mail::to($job->employer->user)->send(
                new \App\Mail\JobPosted($job)
             );

          return redirect('/jobs'); 
    }

    public function edit(Job $job){
/*
        Gate::define('edit-job',function(User $user, Job $job){
    return $job->employer->user->is($user);
        
});


        if(Auth::guest()){
            return redirect('/login');
        }
*/
       // Gate::authorize('edit-job',$job);

/*
if($job->employer->user->isNot(Auth::user())){
abort(403);
}
*/

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job){

        Gate::authorize('edit-job',$job);

        request()->validate([
            'title'=>['required','min:3'],
            'salary'=>['required']
                 ]);
                 //update the job
    
                 $job->update([
                    'title'=>request('title'),
                    'salary'=>request('salary'),
                 ]);
                 //redirect
                 return redirect('/jobs/'.$job->id);
    }

    public function delete(Job $job){

        Gate::authorize('edit-job',$job);

        $job->delete();

 //redirect
 return redirect('/jobs');
    }
}
