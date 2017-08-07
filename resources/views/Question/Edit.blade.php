@extends('layouts.app')

@section('content')


                <div class="panel-heading">Edit Question : {{ $ques->question}}</div>
                <div class="panel-body">
                    {!! Form::model($ques ,array('method'=>'PATCH','action'=>['QuestionsController@update',$ques->id])) !!}
                     <div class="form-group col-lg-4">
                      {!! Form::text('question',null,array('required','class'=>'form-control','placeholder'=>'New Question Name')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                      {!! Form::select('question_type_id',['1'=>'True/False','2'=>'Choices'],null,array('required','class'=>'form-control','placeholder'=>' Question Type')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                      {!! Form::select('category_id',['1'=>'Java','2'=>'PHP','3'=>'Perl','4'=>'Python'],null,array('required','class'=>'form-control','placeholder'=>' Question Category')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                      {!! Form::number('points',null,array('required','class'=>'form-control','placeholder'=>'Points')) !!}
                     </div>
                     
                     <div class="form-group col-lg-4">
                         {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
                     </div>
                    
                    {!! Form::close() !!}
                  </div>  
             
@endsection
