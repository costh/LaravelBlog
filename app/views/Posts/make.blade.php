@extends('templates.default')

@section('content')

{{ Form::open(['url'=>'posts']) }}

{{ Form::label('title1','Title: ').Form::text('title')}}
@if($errors->has('title'))
     {{ $errors->first('title')}}    
@endif<br>

{{ Form::label('Type: ').
	Form::select('type', 
	['1' => 'Draft',
	 '0' => 'Public'], '1');  }}
	 <br>

{{Form::label('body','Body: ').Form::textarea('body') }}
@if($errors->has('body'))
     {{ $errors->first('body')}}    
@endif
<br><p></p>

{{Form::submit('I am done wih my article') }} <br>

{{ Form::close() }}

<h4 style="color:rgb(179, 8, 8);">{{Session::get('message')}} </h4>

@stop