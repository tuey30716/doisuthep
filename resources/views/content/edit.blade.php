@extends('content.layout');

@section('content')
  <div class="row">
    <h2>Edit new </h2>
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

    <form action="{{route('content.update', $content->id) }}" method="post">
        @csrf
        @method('PUT');

        <div class="row">
          <div class="col-12 form-group">
            <label>Title:</label>
            <input type="text" name="title" value="{{$content->title}}" class="form-control">
          </div>
          <div class="col-12 form-group">
            <label>Description:</label>
            <textarea class="form-control" name="description">{{$content->description}}</textarea>
          </div>  
          <div class="col-12 ">
            <button type="submit" class="btn btn-success my-3">Update</button>
          </div>
        </div>
    </form>
  </div>
@endsection
