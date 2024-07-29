<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\SessionController;
use App\Mail\JobPosted;
use Illuminate\Support\Facades\Mail;

/*
Route::get('test',function(){
\Illuminate\Support\Facades\Mail::to('emon29249@gmail.com')->send(
  new \App\Mail\JobPosted()
);
return 'Done';
});
*/
use App\Http\Controllers\ContactController;


Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');


//Auth
Route::get('/register',[SignupController::class,'create']);
Route::post('/register',[SignupController::class,'store']);

Route::get('/login',[SessionController::class,'create'])->name('login');
Route::post('/login',[SessionController::class,'store']);

Route::post('/logout',[SessionController::class,'destroy']);
//Auth
Route::view('/', 'home');

Route::get('/jobs', [JobController::class,'index']);
Route::get('/jobs/create', [JobController::class,'create'])->middleware('auth');
Route::get('/jobs/{job}', [JobController::class,'show']);
Route::post('/jobs', [JobController::class,'store'])->middleware('auth');
Route::get('/jobs/{job}/edit', [JobController::class,'edit'])
->middleware('auth')
->can('edit','job');
Route::patch('/jobs/{job}', [JobController::class,'update']);
Route::delete('/jobs/{job}', [JobController::class,'delete']);

Route::view('/contact', 'contact'); 


/*
Route::controller(JobController::class)->group(function(){
    Route::get('/jobs','index');
Route::get('/jobs/create', 'create');
Route::get('/jobs/{job}','show');
Route::post('/jobs','store');
Route::get('/jobs/{job}/edit','edit');
Route::patch('/jobs/{job}','update');
Route::delete('/jobs/{job}','delete');
}
*/
/*
Route::resource('jobs',JobController::class,[
    'except'=>[],
]);
*/

/*
//index
Route::get('/jobs', function () {
    $jobs=Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//create
Route::get('/jobs/create', function(){
    return view('jobs.create');
    });


//show
Route::get('/jobs/{job}', function (Job $job) {
    //$job=Job::find($id);
    return view('jobs.show', ['job' => $job]);
});
//store
Route::post('/jobs',function(){
     //validation
     //dd(request()->all());

     request()->validate([
'title'=>['required', 'min:3'],
'salary'=>['required']
     ]);

     Job::create([
        'title'=>request('title'),
        'salary'=>request('salary'),
        'employer_id'=>1
     ]);
  return redirect('/jobs');   
});
//edit
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});
//update
Route::patch('/jobs/{job}', function (Job $job) {
    //validate
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
    
});
//delete
Route::delete('/jobs/{job}', function (Job $job) {
 //delete the job
$job->delete();

 //redirect
 return redirect('/jobs');
});

*/
Route::get('/contact', function () {
    return view('contact');
});


