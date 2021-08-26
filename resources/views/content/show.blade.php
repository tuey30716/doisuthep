@extends('content.layout');

@section('content')
  <div class="row">
    <h2>Show Post </h2>
    <a href="{{route('content.index')}}" class="btn btn-dark w-25 my-3">Back</a>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-title">
            <strong>Title:</strong>
            {{ $content->title}}
          </div>
          <div class="card-title">
            <strong>Description:</strong>
            {{ $content->description}}
          </div>
        </div>

      </div>

    </div>

   
  </div>
@endsection
