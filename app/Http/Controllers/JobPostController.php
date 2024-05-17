<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use Illuminate\Http\Request;


class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return JobPost::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    // 'type' => 'Full Time',
    //     'title' => "Senior React Developer",
    //     'description' => "We are seeking a talented Front-End Developer to join our team in Boston, MA. The ideal candidate will have strong skills in HTML, CSS, and JavaScript, with experience working with modern JavaScript frameworks such as React or Angular.",
    //     'location' => "Boston, MA",
    //     'salary' => "$70K - $80K",
    //     'companyName' => "NewTek Solutions",
    //     'companyDescription' => "NewTek Solutions is a leading technology company specializing in web development and digital solutions. We pride ourselves on delivering high-quality products and services to our clients while fostering a collaborative and innovative work environment.",
    //     'contactEmail' => "contact@teksolutions.com",
    //     'contactPhone' => "555-555-5555"
    public function store(Request $request)
    {
        $request->validate([
            'type'=> 'required',
            'title' => 'required',
            'description' => 'required',
            'location' => 'required',
            'salary' => 'required',
            'companyName' => 'required',
            'companyDescription'=> 'required',
            'contactEmail' => 'required',
            'contactPhone' => 'required',

        ]);
        return JobPost::create($request ->all());
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return JobPost::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobPost $jobPost)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $jobPost =JobPost::find($id);
        $jobPost->update($request->all());
        return $jobPost;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       return JobPost::destroy($id);
    }

    /**
     * search for a specific job.
     * search job by title
     */
    public function search($title)
    {
        return JobPost::where('title', 'like', '%'.$title.'%')->get();
    }
}

