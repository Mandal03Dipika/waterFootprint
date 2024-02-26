<?php

namespace App\Http\Controllers;

use App\Models\Survey_Question;
use Illuminate\Http\Request;

class SurveyQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['questions'] = Survey_Question::get();
        return view('question.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $survey = new Survey_Question;
        $survey->survey_question_text = $request->survey_question_text;
        $survey->save();
        return redirect()->route('question.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Survey_Question $survey_Question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data['questions'] = Survey_Question::find($id);
        return view('question.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $survey = Survey_Question::find($id);
        $survey->survey_question_text = $request->survey_question_text;
        $survey->save();
        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $survey = Survey_Question::find($id);
        $survey->delete();
        return redirect()->route('question.index');
    }
}
