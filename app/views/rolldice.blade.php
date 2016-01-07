@extends('layouts.master')

@section('top-script')
	<style type="text/css">
		body {
			background-color: papayawhip;
		}
	</style>	
@stop
{{-- end of top-script --}}

@section('content')
    <h1>The random number is: {{{ $rand }}}</h1>
    <h1>You guessed: {{{ $guess }}}</h1>

    @if ($rand == $guess)
    	<h2>You were right!</h2>
	@else
		<h2>You were wrong!</h2>
	@endif
@stop 
{{-- end of content	 --}}

@section('bottom-script')
@stop
