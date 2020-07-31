<?php

namespace App\Http\Controllers;

use App\FeedbackSubjects;
use Illuminate\Support\Facades\Auth;

class FeedbackSubjectsController extends Controller
{
    public function index()
    {
        $feedbackSubjects=FeedbackSubjects::get();
        return view('feedbackSubjects.index',compact('feedbackSubjects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedbackSubjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackSubjects $feedbackSubject)
    {
        $feedbackSubject->subject = request('subject');
        $feedbackSubject->description = request('description');

        $feedbackSubject->save();

        if(Auth::user()->hasRole('Guest')){
            return redirect('/home');
        }

        return redirect('/feedbackSubjects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedbackSubject = FeedbackSubjects::find($id);
        return view('feedbackSubjects.show',compact('feedbackSubject'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedbackSubject = FeedbackSubjects::find($id);
        return view('feedbackSubjects.update',compact('feedbackSubject'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $feedbackSubject=FeedbackSubjects::find($id);
        $feedbackSubject->subject = request('subject');
        $feedbackSubject->description = request('description');
        $feedbackSubject->save();
        return redirect('/feedbackSubjects/'.$feedbackSubject->id);
    }

    public function delete(FeedbackSubjects $feedbackSubject){

        return view('feedbackSubjects.delete',compact('feedbackSubject'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedbackSubject = FeedbackSubjects::findorFail($id);
        $feedbackSubject->delete();
        return redirect('/feedbackSubjects');
    }

}
