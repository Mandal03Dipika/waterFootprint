@extends('layouts.app')
@section('content')
<style>

</style>
<div class="container">
    <h1 class="text-center">Index Page</h1>
    <a href="{{route('question.create')}}" class="btn btn-primary btn-sm">Create Question</a>
    <a href="{{route('dashboard')}}" class="btn btn-success btn-sm">Back To Dashboard</a>
    <table class="table text-center" border="2px">
        <tr>
            <th>SL. NO</th>
            <th>Questions To Ask</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($questions as $key=>$question)
        <tr class="text">
            <td>{{$key+1}}</td>
            <td>{!!$question->survey_question_text!!}</td>
            <td><a href="{{route('question.edit',$question->id)}}" class="btn btn-success">Edit</a></td>
            <td><a href="{{route('question.delete',$question->id)}}" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection