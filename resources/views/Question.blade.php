@extends('layouts.app')

@section('content')


            <div class="panel panel-default">
                 <hr>
                 <a href="questions/create">
                <div class="panel-heading">Add New Question
                    <span class="glyphicon glyphicon-plus pull-right">+</span>
                </div>
                 </a>
               
                <div class="panel-heading" >ALL Questions </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th> Question No.</th>
                                <th> Question</th>
                                <th> Question Type</th>
                                <th> Category </th>
                                <th> Points </th>
                                <th> Created at</th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($ques))
                        
                            @foreach($ques as $question)
                                
                                    <tr>
                                        <th>{{$question->id}}</th>
                                        <th>{{$question->question}}</th>
                                        <th>{{$question->question_type->type}}</th>
                                        <th>{{$question->category->name}}</th>
                                        <th>{{$question->points}}</th>
                                        <th>{{$question->created_at}}</th>
                                        <th>
                                            <a href="questions/{{$question->id}}/edit"><span class="glyphicon glyphicon-edit">E</span></a>
                                        </th>
                                        <th>
                                        {!! Form::open(['method'=>'DELETE','action'=>['QuestionsController@destroy',$question->id ]]) !!}
                                        {!! Form::submit('X',['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        </th>
                                    </tr>
                              @endforeach  
                        @else
                        <div class="panel-heading" >No Questions Exist Try To Add</div>
                        @endif
                        </tbody>
                        
                    </table>
                </div>
            </div>
        
@endsection
