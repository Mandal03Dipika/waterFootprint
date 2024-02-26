@extends('layouts.app')
@section('content')
<div class="container">
    <a href="{{route('question.index')}}" class="btn btn-success">Question Index</a>
    <form action="{{route('question.update',$questions->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="mb-2 text-center fs-1 fw-bold">Edit Page</h1>
        <div class="my-2 input-group">
            <span class="input-group-text form-group fs-2">Question</span>
            <input type="text" name="survey_question_text" class="form-control">
        </div>
        <div class="text-center"><button type="submit" class="btn btn-success">Submit</button></div>
    </form>
</div>
@endsection