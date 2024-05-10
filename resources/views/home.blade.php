@extends('layout.main')

@section('content')

<h1>Home</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Title</th>
        <th scope="col">Original Title</th>
        <th scope="col">Nationality</th>
        <th scope="col">Date</th>
        <th scope="col">Vote</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie )

        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
              <p class="card-text">{{$movie->nationality}}</p>
              <p class="card-text">{{$movie->date}}</p>
              <p class="card-text">{{$movie->vote}}</p>
            </div>
          </div>

        {{-- <tr>
            <th >{{$movie->id}}</th>
            <th >{{$movie->title}}</th>
            <th >{{$movie->original_title}}</th>
            <th >{{$movie->nationality}}</th>
            <th >{{$movie->date}}</th>
            <th >{{$movie->vote}}</th>
        </tr> --}}
        @endforeach


    </tbody>
  </table>
@endsection
