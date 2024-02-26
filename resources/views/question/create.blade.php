@extends('layouts.app')
@section('content')
<style>
    .btn {
        background-color: green
    }
</style>
<div class="container">


    <form action="{{route('question.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="mb-2 text-center fs-1 fw-bold">Create Question</h1>
        <div class="my-2 input-group">
            <span class="input-group-text form-group fs-2">Question</span>
            <input type="text" name="survey_question_text" class="form-control">
        </div>
        {{-- <div class="answer-panel row">
            <div class="col-6">
                <h1 class="text-center fs-1 fw-bold">Answer Key</h1>
                <div class="row justify-content-evenly">
                    <span class="input-group-text form-group fs-2 col-2">Key1: </span>
                    <input type="text" name="answer" class=" col-3" form-control>
                </div>
                <div class="row justify-content-evenly">
                    <span class="input-group-text form-group fs-2 col-2">Key2: </span>
                    <input type="text" name="answer" class=" col-3" form-control>
                </div>
                <div class="row justify-content-evenly">
                    <span class="input-group-text form-group fs-2 col-2">Key3: </span>
                    <input type="text" name="answer" class=" col-3" form-control>
                </div>
            </div>
            <div class="col-6">
                <h1 class="text-center fs-1 fw-bold">Answer Value</h1>
                <div class="row justify-content-evenly">
                    <span class="input-group-text form-group fs-2 col-2">Value1: </span>
                    <input type="text" name="answer" class=" col-3" form-control>
                </div>
                <div class="row justify-content-evenly">
                    <span class="input-group-text form-group fs-2 col-2">Value2: </span>
                    <input type="text" name="answer" class=" col-3" form-control>
                </div>
                <div class="row justify-content-evenly">
                    <span class="input-group-text form-group fs-2 col-2">Value3: </span>
                    <input type="text" name="answer" class=" col-3" form-control>
                </div>
            </div>
        </div> --}}
        <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
    </form>
</div>

@endsection