@extends ('layouts.master')

@section('content')

<div class=('container-fluid')>
	<div class=('row')>
		<div class=('col-md-8')>
	            
			{{ Form::open(array('action' =>'HomeController@postContact')) }}
		    	<div class="form-group">
		           	{{ Form::label('from', 'Your Name') }}
		            {{ Form::text('from', null, array('class' =>'form-control', 'placeholder' => 'Hi, what\'s your name?')) }}
		        </div>

		        <div class="form-group">
		       		{{ Form::label('email', 'Your Email') }}
		        	{{ Form::text('email', null, array('class' =>'form-control', 'placeholder' => 'Enter Your Email')) }}
		    	</div>

		        <div class="form-group">
		        	{{ Form::label('subject', 'Subject') }}
		       		{{ Form::text('subject', null, array('class' =>'form-control', 'placeholder' => 'Your message subject')) }}
		       	</div>

				<div class="form-group">
		       		{{ Form::label('body', 'Message Body') }}
		       		{{ Form::textarea('body', null, array('class' => 'form-control', 'rows' => '4', 'placeholder' => 'Your message')) }}
		       	</div>

		        {{ Form::submit('Send email!', array('class' => 'btn btn-primary')) }}

		    {{ Form::close() }}

		</div><!--end col-md-6-->
	</div><!-- end row -->
</div><!--end container-->    
@stop