@extends('layouts.app');

@section('content')
<section>
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>Title</th>
            <th>Thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>
                <a href="{{route('comics.create')}}">Create</a>
            </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($comics as $comic)
              <tr>
                <td>{{$comic->id}}</td>
                <td>
                    <a href="{{route ('comics.show', $comic)}}">
                        {{ $comic->title }}
                    </a>
                </td>
                <td>
                  <img src="{{ $comic->thumb }}" width="40" alt="">
                </td>
                <td>${{ $comic->price }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td><a href="{{route('comics.edit', $comic)}}">Edit</a></td>
                <td> 
                  <form action="{{ route('comics.destroy', $comic)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" onclick="confirmDelete({{ $comic->id }})">Delete</button>
                  </form>
                </td>
              </tr>
          @empty
              <tr>
                <td colspan="6">
                  Nessuna comic trovata
                </td>
              </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </section>
@endsection