<?php

namespace App\Http\Controllers;

use App\Mail\jobPosted;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class jobController extends Controller
{
    public function index()
    {
        $jobs = job::with('employer')->simplePaginate(3);
        return view('jobs.index' , ['jobs' => $jobs]);
    }

    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        // validation
        request()->validate([
            'name' => 'required|min:4|max:20',
            'salary' => 'required|numeric',
        ]);

        $user = Auth::user();

        // create
        $job = Job::create([
            'name' => request('name'),
            'salary' => request('salary'),
            'employer_id' => $user->employer->id,
        ]);


        Mail::to(Auth::user()->email)->queue(
            new jobPosted($job),
        );
        return redirect('/jobs');
    }

    public function show(Job $job)
    {
        return view('jobs.show' , [ 'job' => $job ]);
    }


    public function edit(Job $job)
    {
        return view('jobs.edit' ,
            [
                'job' => $job,
            ]);
    }

    public function update(Job $job)
    {
        request()->validate([
            'name' => 'required|min:4|max:8',
            'salary' => 'required|numeric',
        ]);

        $job->update([
            'name' => request('name'),
            'salary' => request('salary'),
        ]);
        return to_route('jobs.show' , $job->id );
    }


    public function destroy(Job $job)
    {

        // Delete
        $job->delete();

        // back
        return redirect('/jobs');
    }

}
