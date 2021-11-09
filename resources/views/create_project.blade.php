@extends('layouts.app')

@section('content')

  <div class="col-md-offset-2 col-md-6">
  <form class="form-group" action="{{route('store.project')}}" method="post">
    {{ csrf_field() }}
    <label for="">Project</label>
    <input type="text" class="form-control" name="project" value="">
<br/>

      <input type="submit" class="btn btn-primary" name="" value="Submit">

  </form>
</div>
@endsection
