@extends('layouts.app')

@section('content')


            <div class="panel panel-default">
                 <hr>
                 <a href="admin/create">
                <div class="panel-heading">Add New Quiz
                    <span class="glyphicon glyphicon-plus pull-right">+</span>
                </div>
                 </a>
               
                <div class="panel-heading" >ALL QUIZES </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th> Quiz No.</th>
                                <th> Quiz Name</th>
                                <th> Category </th>
                                <th> Time </th>
                                <th> Total Points</th>
                                <th> Pass Points</th>
                                <th> Created at</th>
                                <th> Questions</th>
                                <th> Edit </th>
                                <th> Delete </th>
                            </tr>
                        </thead>
                        <tbody>
                        @if(!empty($quizs))
                        
                            @foreach($quizs as $qz)
                                
                                    <tr>
                                        <th>{{$qz->id}}</th>
                                        <th>{{$qz->name}}</th>
                                        <th>{{$qz->category->name}}</th>
                                        <th>{{$qz->time}}</th>
                                        <th>{{$qz->total_points}}</th>
                                        <th>{{$qz->pass_points}}</th>
                                        <th>{{$qz->created_at}}</th>
                                        <th><a href="">Questions</a></th>
                                        <th>
                                            <a href="admin/{{$qz->id}}/edit"><span class="glyphicon glyphicon-edit">E</span></a>
                                        </th>
                                        <th>
                                        {!! Form::open(['method'=>'DELETE','action'=>['AdminController@destroy',$qz->id ]]) !!}
                                        {!! Form::submit('X',['class'=>'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        </th>
                                    </tr>
                              @endforeach  
                        @else
                        <p>No Quizes Exist Try To Add</p>
                        @endif
                        </tbody>
                        
                    </table>
                </div>
            </div>
        
@endsection
