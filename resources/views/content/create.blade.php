@extends('content.layout');

@section('content')
  <div class="row">
    <h2>Add new </h2>
    <a href="{{route('content.index')}}" class="btn btn-dark w-25 my-3">Back</a>
    @if($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops!</strong>
        There  were sone
        <ul>
          @foreach($errors->all() as $errors)
            <li>{{$errors}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('content.store') }}" method="post">
        @csrf
        <div class="row">
          <div class="col-12 form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control">
          </div>
          <div class="col-12 form-group">
            <label>Description:</label>
            <textarea class="form-control" name="description"></textarea>
          </div>  
          <div class="col-12 ">
            <button type="submit" class="btn btn-success my-3">Submit</button>
          </div>
        </div>
    </form>
  </div>
@endsection
