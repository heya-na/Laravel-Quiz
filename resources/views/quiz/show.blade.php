@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="/quiz">
    <fieldset class="form-group">
      <legend>{{ $question->body }}</legend>
      @foreach($question->options as $option)
	      <div class="form-check">
	        <label class="form-check-label">
	          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1">    
				{{$option->body}}
	        </label>
	      </div>
      @endforeach
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection