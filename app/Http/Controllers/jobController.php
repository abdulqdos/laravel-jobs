<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

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
            'name' => 'required|min:4|max:8',
            'salary' => 'required|numeric',
        ]);


        // create
        Job::create([
            'name' => request('name'),
            'salary' => request('salary'),
            'employer_id' => 1,
        ]);
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


    public function delete(Job $job)
    {
        // Delete
        $job->delete();

        // back
        return redirect('/jobs');
    }

}
