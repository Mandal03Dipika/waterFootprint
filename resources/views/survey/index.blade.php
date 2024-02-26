@extends('layouts.main')
@section('content')
<style>
    #myVideo {
        position: fixed;
        right: 0;
        bottom: 0;
        min-width: 100%;
        min-height: 100%;
        z-index: -1;
        background: black;
    }

    .center {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 80%;
        max-width: 800px;
        text-align: center;
        border: 2px solid #000053;
        border-radius: 15px;
        background-color: rgba(188, 251, 251, 0.61);
        box-shadow: 2px 2px 2px rgba(188, 251, 251, 0.61);
        transform: translate(-50%, -50%);
        color: #000053;
        font-size: 40px;
    }

    .heading {
        text-align: center;
        color: #000053;
        margin-top: 80px;
        font-size: 40px;
        text-shadow: 2px 2px 2px rgba(188, 251, 251, 0.61);

    }

    .text {
        font-size: 30px;
    }
</style>
<div class="px-4 container-fluid">
    <video autoplay="" muted="" loop="" id="myVideo">
        <source src="{{asset('images/Backgrd.mp4')}}" type="video/mp4">
    </video>
    <h1 class="heading">Fair & Smart Use of Resources</h1>
    <div class="center">
        <form action="{{route('survey.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="text">
                {!!$survey_question->survey_question_text!!}
                <input type="text" name="question_id" value="{{$survey_question->id}}" class="sr-only">
            </div>
            <button type="submit" class="mb-2 btn btn-outline-info">Next</button>
        </form>
    </div>
</div>
@endsection
{{-- @push('script')
<script>
    function fetchDatafromDatabase()
        {
            $.ajax({
                url:'/fetchData',
                method:'GET',
                success:function(response)
                {
                    updateContent(response);
                },
                error:function(error)
                {
                    console.error('Error fetching data: ',error);
                }
            });
        }
        function updateContent(data)
        {
            var container=$('#data');
            container.empty();
            data.forEach(function(item){
                container.append('<h3>'+item.survey_question_text+'</h3>');
            });
        }
        $('#fetch').on('click',function(){
            fetchDatafromDatabase();
        });
</script>
@endpush --}}