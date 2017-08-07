@extends('layouts.app')

@section('content')


                <div class="panel-heading">Add Quiz's Questions</div>
                <div class="panel-body">
                     {!! Form::open(array('route'=>'quezques.store')) !!}
                     
                     <div class="form-group col-lg-4">
                           <label>Quez name : </label>
                        <select class="form-control" name="quiz_id">
                            <option value="" selected disabled>select quez</option>
                           @foreach($quiz  as $qz)
                             <option value="{{$qz->id}}">{{$qz->name}}</option>
                           @endforeach
                         </select>             
                     </div>
                     <div class="form-group col-lg-4">
                         <label>Question : </label>
                         <select class="form-control" name="question_id">
                             <option value="" selected disabled>select question</option>
                           @foreach($question  as $ques)
                             <option value="{{$ques->id}}">{{$ques->question}}</option>
                           @endforeach
                         </select>   
                     </div>
                    
                     
                     <div class="form-group col-lg-4">
                         {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}
                     </div>
                    
                    {!! Form::close() !!}
                  </div>  
             
@endsection
