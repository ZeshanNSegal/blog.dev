@extends('layouts.master')

@section('top-script')
    
@stop

@section('content')

<div class=('container-fluid createNote')>
	<div class=('row')>
        <div class="col-md-8 col-md-offset-2">
            
            {{ Form::open(array('action' => 'NotesController@store', 'files' => true)) }}
                             
                        {{ $errors->first('title', '<span class="help-block">:message</span>') }}    

                        {{ Form::label('title', 'Title') }}
                        {{ Form::text('title', null, ['class' => 'form-control']) }}
               
                        {{ $errors->first('body', '<span class="help-block">:message</span>') }}
                        
                        {{ Form::label('body', 'Body') }}
                        {{ Form::textarea('body', null, ['class' => 'form-control', 'rows' => '7']) }}
                 
                <button class="btn btn-default formmargin" type="submit">Submit</button>
            {{ Form::close() }}

        </div> <!-- end col-md-8 -->
    </div> <!-- end row -->
</div><!--end container-->  
@stop