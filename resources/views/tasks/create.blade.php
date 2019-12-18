@extends('base')

@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Add a task</h1>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger"></div>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li> 
        @endforeach
    </ul>
</div><br />
@endif
<div>
  <form method="post" action="{{ route('tasks.store') }}">
      @csrf
      <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" />
      </div>

      <div class="form-group">
          <label for="">Details</label>
          <input type="text" class="form-control" name="details" />
      </div> 
      <div>
          <button type="submit" class="btn btn-primary-outline">Add a task</button>
      </div>
  </form>
</div>
</div>
@endsection
