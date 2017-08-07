@extends('layouts.app')

@section('content')


                <div class="panel-heading">Edit Quiz : {{ $quiz->name}}</div>
                <div class="panel-body">
                     {!! Form::model($quiz ,array('method'=>'PATCH','action'=>['AdminController@update',$quiz->id])) !!}
                     <div class="form-group col-lg-4">
                      {!! Form::text('name',null,array('required','class'=>'form-control','placeholder'=>'New Quiz Name')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                      {!! Form::select('category_id',['1'=>'Java','2'=>'PHP','3'=>'Perl','4'=>'Python'],null,array('required','class'=>'form-control','placeholder'=>' Quiz Category')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                      {!! Form::number('time',null,array('required','class'=>'form-control','placeholder'=>'New Quiz Time')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                     {!! Form::number('total_points',null,array('required','class'=>'form-control','placeholder'=>' Quiz Total Points')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                     {!! Form::number('pass_points',null,array('required','class'=>'form-control','placeholder'=>' Quiz Pass Points')) !!}
                     </div>
                     <div class="form-group col-lg-4">
                         {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
                     </div>
                    
                    {!! Form::close() !!}
                  </div>  
             
@endsection
