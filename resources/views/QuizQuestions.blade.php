@extends('layouts.app')

@section('content')


            <div class="panel panel-default">
                 <hr>
                 <a href="quezques/create">
                <div class="panel-heading">Add Quez's Questions
                    <span class="glyphicon glyphicon-plus pull-right">+</span>
                </div>
                 </a>
               
                <div class="panel-heading" >ALL Questions </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th> Quiz_Question No.</th>
                                <th> Quiz</th>
                                <th> Question </th>
                                <th> Created at</th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($qzques))
                        
                            @foreach($qzques as $qzquestion)
                                
                                    <tr>
                                        <th>{{$qzquestion->id}}</th>
                                        <th>{{$qzquestion->quiz->name}}</th>
                                        <th>{{$qzquestion->question->question}}</th>
                                        
                                        <th>{{$qzquestion->created_at}}</th>
                                        <th>
                                            <a href="quezques/{{$qzquestion->id}}/edit"><span class="glyphicon glyphicon-edit">E</span></a>
                                        </th>
                                        <th>
                                        {!! Form::open(['method'=>'DELETE','action'=>['QuezQuestionsController@destroy',$qzquestion->id ]]) !!}
                                        {!! Form::submit('X',['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        </th>
                                    </tr>
                              @endforeach  
                        @else
                        <div class="panel-heading" >No Questions Exist On The Quiz Try To Add</div>
                        @endif
                        </tbody>
                        
                    </table>
                </div>
            </div>
        
@endsection
