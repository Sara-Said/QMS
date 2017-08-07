@extends('layouts.app')

@section('content')


                <div class="panel-heading">Edit Quiz's Questions No. : {{ $qzques->id}} </div>
                <div class="panel-body">
                      {!! Form::model($qzques ,array('method'=>'PATCH','action'=>['QuezQuestionsController@update',$qzques->id] )) !!}
                     <div class="form-group col-lg-4">
                           <label>Quez name : </label>
                           <select name="quez_id">
                               <option value="{{$qzques->quiz->id}}"  >{{$qzques->quiz->name}}</option>   
                           @foreach($quez as $qz)
                           <option value="{{$qz->id}}">{{$qz->name}}</option>
                           @endforeach
                           </select>
                     </div>
                     <div class="form-group col-lg-4">
                         <label>Question : </label>
                         <select name="question_id">
                             <option value="{{$qzques->question->id}}" selected>{{$qzques->question->question}}</option>  
                         @foreach($question as $ques)
                         <option value="{{$ques->id}}">{{$ques->question}}</option>
                           @endforeach
                           </select>
                     </div>
                    
                     
                     <div class="form-group col-lg-4">
                         {!! Form::submit('Edit',['class'=>'btn btn-primary']) !!}
                     </div>
                    
                    {!! Form::close() !!}
                  </div>  
             
@endsection
