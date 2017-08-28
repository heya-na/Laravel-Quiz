@extends('layouts.app')

@section('content')
<div class="container">
  <form method="POST" action="/quiz">
    <fieldset class="form-group">
      <legend>Question 1</legend>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
          Option one is this and that&mdash;be sure to include why it's great
        </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
          <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
          Option two can be something else and selecting it will deselect option one
        </label>
      </div>
    </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection