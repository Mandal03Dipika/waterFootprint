<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\Survey_Question;
use App\Models\UserSurvey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SurveyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function over()
    {
        return view('survey.over');
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $ex_survey = Survey::where('user_id', $user_id)->where('status', 1)->first();
        if ($ex_survey == null) {
            $data['survey_question'] = Survey_Question::get()->first();
        } else {
            $survey_store = UserSurvey::where('slot_id', $ex_survey->id)->get();
            $data['survey_store_question'] = $survey_store->toArray();
            $ex_question = $survey_store->pluck('question_id')->toArray();
            $data['survey_question'] = Survey_Question::whereNotIn('id', $ex_question)->get()->first();
        }
        if ($data['survey_question'] == null) {
            $maleFactor = 10;
            $femaleFactor = 8;
            $vegFactor = 5;
            $nonVegFactor = 6;
            $perMeal = 10;
            $perShower = 9;
            $perGlass = 8;
            $results = 0;
            $data['survey_answer'] = UserSurvey::where('slot_id', $ex_survey->id)->get();
            // dd($data['survey_answer']);
            // @foreach
            return view('survey.over');
        }
        return view('survey.index', $data);
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'answer' => 'required',
        ]);
        if ($validator->fails()) {
            // dd($request->all());
            return response()->json([
                'status' => false,
                'message' => "Something went wrong",
            ]);
        }
        $user_id = auth()->user()->id;
        $ex = Survey::
            where('user_id', $user_id)
            ->where('status', 1)
            ->first();
        $data = new Survey();
        if ($ex == null) {
            $data->user_id = $user_id;
            $data->status = 1;
            $data->save();
            // $ex=$data;
        }
        $user_survey = new UserSurvey();
        if ($ex == null) {
            $user_survey->slot_id = $data->id;
        } else {
            $user_survey->slot_id = $ex->id;
        }
        $user_survey->question_id = $request->question_id;
        $user_survey->answer = $request->answer;
        $user_survey->save();
        return redirect()->route('survey.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Survey $survey)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Survey $survey)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Survey $survey)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Survey $survey)
    {
        //
    }

    /**
     * Show data sequentially
     */
    public function fetchData()
    {
        $data = Survey::all();
        return response()->json($data);
    }

    /**
     * Over Function
     */

}
