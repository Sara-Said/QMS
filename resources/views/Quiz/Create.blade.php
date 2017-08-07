@extends('layouts.app')

@section('content')


                <div class="panel-heading">Add New Quiz</div>
                <div class="panel-body">
                     {!! Form::open(array('route'=>'admin.store','files'=>true)) !!}
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
                         {!! Form::submit('Add',['class'=>'btn btn-primary']) !!}
                     </div>
                    
                    {!! Form::close() !!}
                  </div>  
             
@endsection
